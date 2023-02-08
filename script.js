

window.onload=function(){
  var hamburger = document.querySelector(".hamburger");
var navBar = document.querySelector(".menu-main-menu-container");

if(hamburger){
  hamburger.addEventListener('click', ()=> {
    navBar.classList.toggle('active');
  })
}
}