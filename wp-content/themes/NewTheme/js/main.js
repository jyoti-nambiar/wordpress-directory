function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function functionReadMore() {
  
  var x = document.getElementById("popup");
  var y=document.querySelector('.moreInfo');
  var content=document.querySelector('.popup__content')
  var z=document.querySelector('.popup__close')
 y.onclick=function show(){
    x.style.visibility='visible'; 
    x.style.opacity=1  ;
    content.style.opacity=1;
};
z.onclick=function close(){
 x.style.visibility='hidden'; 
    x.style.opacity=0  ;


}



}