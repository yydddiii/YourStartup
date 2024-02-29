var count = 0

document.querySelector('.burger-menu').addEventListener('click', function(){
  var header = document.querySelector('.header');
  this.classList.toggle('active');
  document.querySelector('.menu').classList.toggle('menu_visible');
  document.querySelector('.right-menu').classList.toggle('menu_visible');
  if(count === 0){
    count = 1
    header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
  }else if(window.scrollY > 0){
    count = 0
  }else{
  count = 0
  header.style.backgroundColor = 'transparent';
}
})

window.addEventListener('scroll', function() {
  var header = document.querySelector('.header');
  if(window.scrollY === 0 && count === 0){
    header.style.backgroundColor = 'transparent';
  }else if (window.scrollY > 0) {
    header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
  }
});

document.querySelector('.application__select-arrow').addEventListener('click', function(){
  this.classList.toggle('open');
  var submenu_wrapper = document.querySelector('.application__submenu-rate-wrapper');
  if(submenu_wrapper.style.visibility === 'hidden'){
    submenu_wrapper.style.visibility = "visible";
    submenu_wrapper.style.opacity = 1;
  }else{
    submenu_wrapper.style.visibility = "hidden";
    submenu_wrapper.style.opacity = 0;
  }
  document.querySelector('.application__select-arrow').classList.toggle('arrow-active');
});

document.querySelector('.support__button').addEventListener('click', function(){
  document.querySelector('.application').classList.toggle('called')
  document.querySelector('.header').classList.toggle('hide')
});

document.querySelector('.right-menu__button').addEventListener('click', function(){
  document.querySelector('.application').classList.toggle('called')
  document.querySelector('.header').classList.toggle('hide')
});

document.querySelector('.big-button__button').addEventListener('click', function(){
  document.querySelector('.application').classList.toggle('called')
  document.querySelector('.header').classList.toggle('hide')
});

document.querySelector('.application__cross-img').addEventListener('click', function(){
  document.querySelector('.application').classList.toggle('called')
  document.querySelector('.header').classList.toggle('hide')
});

document.querySelector('.application__submenu-option1').addEventListener('click', function(){
  var submenu_wrapper = document.querySelector('.application__submenu-rate-wrapper');
  document.querySelector('.application__select-arrow').classList.toggle('arrow-active')
  if(submenu_wrapper.style.visibility === 'hidden'){
    submenu_wrapper.style.visibility = "visible";
    submenu_wrapper.style.opacity = 1;
  }else{
    submenu_wrapper.style.visibility = "hidden";
    submenu_wrapper.style.opacity = 0;
  }
});

document.querySelector('.application__submenu-option2').addEventListener('click', function(){
  var submenu_wrapper = document.querySelector('.application__submenu-rate-wrapper');
  document.querySelector('.application__select-arrow').classList.toggle('arrow-active')
  if(submenu_wrapper.style.visibility === 'hidden'){
    submenu_wrapper.style.visibility = "visible";
    submenu_wrapper.style.opacity = 1;
  }else{
    submenu_wrapper.style.visibility = "hidden";
    submenu_wrapper.style.opacity = 0;
  }
});

document.querySelector('.application__submenu-option3').addEventListener('click', function(){
  var submenu_wrapper = document.querySelector('.application__submenu-rate-wrapper');
  document.querySelector('.application__select-arrow').classList.toggle('arrow-active')
  if(submenu_wrapper.style.visibility === 'hidden'){
    submenu_wrapper.style.visibility = "visible";
    submenu_wrapper.style.opacity = 1;
  }else{
    submenu_wrapper.style.visibility = "hidden";
    submenu_wrapper.style.opacity = 0;
  }
});
