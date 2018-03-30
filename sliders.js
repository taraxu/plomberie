var sliderMove;

//creer function startSlider
function startSlider(){
    var infoUl=document.getElementsByClassName('sliderDetail')[0];
    var infoLi=document.getElementsByClassName('sliderImg');
    infoUl.innerHTML=infoUl.innerHTML+infoUl.innerHTML;//doubler les images
    infoUl.style.width=infoLi[0].offsetWidth*infoLi.length+'px';//set the length of UL
    sliderMove = setInterval(function () {
        if (infoUl.offsetLeft <= -infoUl.offsetWidth / 2) {
            infoUl.style.left = '0';
        }
        infoUl.style.left = infoUl.offsetLeft -1 + 'px';
    }, 30);
};

//Creer function stopSlider et appeler la function quand clicker 'stop'
document.getElementById('stop').addEventListener('click', stopSlider);
function stopSlider() {
    clearInterval(sliderMove);
};

//appeler la function quand page est téléchargée (Automatique)
window.onload=function(){
    startSlider();
};

//appeler la function startSlider quand clicker'start'
document.getElementById('start').addEventListener('click', startSlider);



