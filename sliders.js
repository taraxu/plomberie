//------------------------- screen slider  --------------------------
var sliderMove;

//create the function startSlider
function startSlider(){
    var infoUl=document.getElementsByClassName('sliderDetail')[0];
    var infoLi=document.getElementsByClassName('sliderImg');
    infoUl.innerHTML=infoUl.innerHTML+infoUl.innerHTML;//double the images
    infoUl.style.width=infoLi[0].offsetWidth*infoLi.length+'px';//set the length of UL
    sliderMove = setInterval(function () {
        if (infoUl.offsetLeft <= -infoUl.offsetWidth / 2) {
            infoUl.style.left = '0';
        }
        infoUl.style.left = infoUl.offsetLeft -1 + 'px';
    }, 30);
};

//Create function stopSlider and call the function when click 'stop'
document.getElementById('stop').addEventListener('click', stopSlider);
function stopSlider() {
    clearInterval(sliderMove);
};

//Call function when  page was loaded (Automatic)
window.onload=function(){
    startSlider();
    showSlides();
};

//Call function startSlider when click'play'
document.getElementById('play').addEventListener('click', startSlider);


//---------------------- repsonsive slider -------------------------
var sliderResImgArr =
    [
        { image: "instructions/slid1.jpg", number:"1 / 9"},
        { image: "instructions/slid2.jpg", number:"2 / 9"},
        { image: "instructions/slid3.jpg", number:"3 / 9"},
        { image: "instructions/slid4.jpg", number:"4 / 9"},
        { image: "instructions/slid5.jpg", number:"5 / 9"},
        { image: "instructions/slid6.jpg", number:"6 / 9"},
        { image: "instructions/slid7.jpg", number:"7 / 9"},
        { image: "instructions/slid8.jpg", number:"8 / 9"},
        { image: "instructions/slid9.jpg", number:"9 / 9"}
    ]

var slideIndex = 0;
function showSlides() {
    slideIndex++;
    if (slideIndex > sliderResImgArr.length) {slideIndex = 1};
    var slides = document.querySelector('#sliderResponsive img');
    var slidesNum = document.querySelector('#sliderResponsive p');
    slides.src = sliderResImgArr[slideIndex-1].image;
    slidesNum.textContent = sliderResImgArr[slideIndex-1].number;
    setTimeout(showSlides, 2000);
}
