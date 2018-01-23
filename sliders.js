var sliderMove;
//creer function startSlider
function startSlider(){

    var infoUl=document.getElementsByClassName('sliderDetail')[0]; 
    //console.log(infoUl); 
    var infoLi=document.getElementsByClassName('sliderImg');  
  
    infoUl.innerHTML=infoUl.innerHTML+infoUl.innerHTML;//doubler les images  
    //console.log(infoUl.innerHTML);
    //console.log(infoLi[0].offsetWidth);
    infoUl.style.width=infoLi[0].offsetWidth*infoLi.length+'px';//set the length of UL 
    //console.log(infoUl.style.width);
    //console.log(infoLi);
    //console.log(infoUl.offsetWidth);
        sliderMove = setInterval(function(){  
        if(infoUl.offsetLeft <= -infoUl.offsetWidth/2){ //comparer le offsetLeft avec le slider visible
            infoUl.style.left='0';//recommence par la première image
        }  
        infoUl.style.left=infoUl.offsetLeft-1+'px';//1px à gauche chaque movement  
  
        },30);
}; 
//Creer function stopSlider et apeler la function quand clicker 'stop'
document.getElementById('stop').addEventListener('click', stopSlider);
function stopSlider() {
    clearInterval(sliderMove);
};

//apeler la function quand page est téléchargé (Automatique)
window.onload=function(){
    startSlider();
};
//apeler la function startSlider quand clicker'start'
document.getElementById('start').addEventListener('click', startSlider);



