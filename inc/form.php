<?php
//Form-trait
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (count($_POST) >0 ) {
    if (is_array($_POST)) {
        $mail = sanitize($_POST['mail']);
        $firstname = sanitize($_POST['firstname']);
        $lastname = sanitize($_POST['lastname']);
        $zipcode = sanitize($_POST['zipcode']);
        $content = sanitize($_POST['content']);

        $result = $bdd->prepare("SELECT COUNT(firstname) as number FROM writers WHERE mail='$mail'");
        $result->execute();
        $donnes = $result->fetch();
        if ($donnes['number'] == 0) { //new writer
            //insert all information in writer table and create "writer_id "
            $result2 = $bdd->prepare('INSERT INTO writers (firstname, lastname, zipcode, mail) VALUES(?, ?, ?, ?)');
            $donnes2 = $result2->execute(array($firstname, $lastname, $zipcode, $mail));
        } else { //"writer_id exists"
            //compare zipcode
            $result3 = $bdd->prepare("SELECT COUNT(zipcode) AS zipcodeNumber FROM writers WHERE mail='$mail' AND zipcode='$zipcode' ");
            $result3->execute();
            $donnes3 = $result3->fetch();
            //if zipcode is not the same as register
            if ($donnes3['zipcodeNumber'] == 0) {
                //regester or re-regester in zipcode2
                $result4 = $bdd->prepare("UPDATE writers SET zipcode2 = '$zipcode' WHERE mail = '$mail'");
                $donnes4 = $result4->execute(array($zipcode));
            }
        };
        //Catch "writer_id"
        $result5 = $bdd->prepare("SELECT writer_id FROM writers WHERE mail='$mail'");
        $result5->execute();
        $donnes5 = $result5->fetch();
        foreach ($donnes5 as $k => $v) { };
        $writerID = intval($v);
        //insert the content in the table "messages" with "writer_id"
        $result6 = $bdd->prepare('INSERT INTO messages (content, writer_id) VALUES(?, ?)');
        $result6->execute(array($content, $writerID));

        if (count($_FILES) > 0) {
            if (isset($_FILES['picture'])) {
                $files = $_FILES['picture'];
                foreach ($files['name'] as $i => $fileName) {
                    $fileError = $files['error'][$i];
                    $fileTmpName = $files['tmp_name'][$i];
                    $uploadExtension = strtolower(substr(strrchr($fileName, "."), 1));
                    $allowExtention = ['jpg', 'jpeg', 'png', 'gif'];
                    $uniqueName = md5(uniqid(rand(), true)) . '.' . $uploadExtension;
                    if ($fileError !== 0) {
                        if ($fileError === UPLOAD_ERR_INI_SIZE) {
                            $msg = "La totalité des photos envoyée est trop volumineuse";
                        } elseif ($fileError === UPLOAD_ERR_FORM_SIZE) {
                            $msg = $fileName . " est trop volumineux";
                        } elseif ($fileError === UPLOAD_ERR_PARTIAL) {
                            $msg = "Envoie de la photo " . $fileName . " n'est pas réussie";
                        } elseif ($fileError === UPLOAD_ERR_EXTENSION) {
                            $msg = "Le format du fichier n'est pas adapté";
                        } elseif ($fileError === UPLOAD_ERR_NO_FILE) {
                            $msg = "";
                        }
                    } else {
                        if (in_array($uploadExtension, $allowExtention)) {
                            $uploadFile = move_uploaded_file($fileTmpName, 'upload/' . $uniqueName);
                            $msg = $fileName . " a été envoyé avec succès";
                            $result7 = $bdd->prepare('INSERT INTO photos (photo_name, writer_id) VALUES(?, ?)');
                            $result7->execute(array($uniqueName, $writerID));
                        } else {
                            $msg = "Le format de la photo " . $fileName . " n'est pas autorisé";
                        }
                    }
                    echo "<p>" . $msg . "</p>";

                }
            }
        }
    }
}

if(isset($_POST['submit'])){
    if(!empty($uploadFile)){
        $mailMsg = 'Vous avez reçu un nouveau message de: ' . "\n"
            . 'Prénom: ' . $firstname . "\n"
            . 'Nom: ' . $lastname . "\n"
            . 'Email: ' . $mail . "\n"
            . 'Photo:' . "oui" . "\n"
            . 'Message: ' . $content ;
        mail('yangxumailbox@gmail.com', 'Message du site Mon plombier bien aime', $mailMsg);
    }else{
        $mailMsg = 'Vous avez reçu un nouveau message de: ' . "\n"
            . 'Prénom: ' . $firstname . "\n"
            . 'Nom: ' . $lastname . "\n"
            . 'Email: ' . $mail . "\n"
            . 'Photo:' . "non" . "\n"
            . 'Message: ' . $content ;
        mail('yangxumailbox@gmail.com', 'Message du site Mon plombier bien aime', $mailMsg);
    }
};
?>