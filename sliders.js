window.onload=function(){  
    //var oDiv=document.getElementById('slider');  
    var infoUl=document.getElementsByTagName('ul')[0]; 
    //console.log(infoUl); 
    var infoLi=document.getElementsByTagName('li');  
  
    infoUl.innerHTML=infoUl.innerHTML+infoUl.innerHTML;//doubler les images  
    //console.log(infoUl.innerHTML);
  
    infoUl.style.width=infoLi[0].offsetWidth*infoLi.length+'px';//随便获取一个li的宽度，这里用第一个代表计算出ul的长度  
    setInterval(function(){  
        if(infoUl.offsetLeft <= -infoUl.offsetWidth/2){ //comparer le offsetLeft avec le slider visible
            infoUl.style.left='0';//当所有图片滚动完之后将left设置为0意味着后面无缝地接着第一张图片 
        }  
        infoUl.style.left=infoUl.offsetLeft-1+'px';//1px à gauche chaque movement  
  
    },30);
};
    