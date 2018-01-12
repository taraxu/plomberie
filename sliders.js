window.onload=function(){  
    //var oDiv=document.getElementById('slider');  
    var infoUl=document.getElementsByTagName('ul')[0];  //获取第一张图片的信息
    var infoLi=document.getElementsByTagName('li');  
  
    infoUl.innerHTML=infoUl.innerHTML+infoUl.innerHTML;//变成两副图，然后才能实现无缝滚动  
  
    infoUl.style.width=infoLi[0].offsetWidth*infoLi.length+'px';//随便获取一个li的宽度，这里用第一个代表计算出ul的长度  
    setInterval(function(){  
        if(infoUl.offsetLeft<-infoUl.offsetWidth/2){//offsetLeft是负数，而offsetWidth是一个最小大于0的数，所以加个-号才能进行比较  
            infoUl.style.left='0';//当所有图片滚动完之后将left设置为0意味着后面无缝地接着第一张图片，这个过程如果看见两副图片就会看见有些变化，但实际上只会看见一副，所以几乎没有变化  
        }  
        infoUl.style.left=infoUl.offsetLeft-300+'px';//每次向左移动2px  
  
    },1500);  
};