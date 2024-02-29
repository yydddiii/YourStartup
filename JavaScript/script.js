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