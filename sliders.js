function slider() {
	var slidersHomepage = ['instructions/slider1.jpg', 'instructions/slider2.jpg', 'instructions/slider3.jpg'];

	for (var i = 0; i < slidersHomepage.length; i++) {
	document.querySelector('.slider img').src = slidersHomepage[i];
	};
}

var timer 
function sliderTimer() {
	timer = setInterval(slider(), 3000);
}





/*
 

#demo { 
    background: #FFF; 
    overflow:hidden; 
    border: 1px dashed #CCC; 
    width: 500px; 
} 
#demo img { 
    border: 3px solid #F2F2F2; 
} 
#indemo { 
    float: left; 
    width: 800%; 
} 
#demo1 { 
    float: left; 
} 
#demo2 { 
    float: left; 
} 


<!--
</style> 
向左滚动 

</div> 
<script> 
<!-- 
var speed=10; //数字越大速度越慢 
var tab=document.getElementById("demo"); 
var tab1=document.getElementById("demo1"); 
var tab2=document.getElementById("demo2"); 
tab2.innerHTML=tab1.innerHTML; 
function Marquee(){ 
if(tab2.offsetWidth-tab.scrollLeft<=0) 
tab.scrollLeft-=tab1.offsetWidth 
else{ 
tab.scrollLeft++; 
} 
} 
var MyMar=setInterval(Marquee,speed); 
tab.onmouseover=function() {clearInterval(MyMar)}; 
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)}; 
*/