  console.log('hello');
const body = document.querySelector('.js-body');
const nav = document.querySelector('.js-nav');
const burger = document.querySelector('.js-burger');

burger.addEventListener('click', ()=>{  
  burger.classList.toggle('burger--active');
  nav.classList.toggle('header__nav--active');
  body.classList.toggle('body--lock');
});

var acc = document.getElementsByClassName("main__btn");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
