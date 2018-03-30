// slider for screen version
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

//appeler la function startSlider quand clicker'play'
document.getElementById('play').addEventListener('click', startSlider);




//slider for responsive version
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("sliderResImg");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}



