window.addEventListener('scroll', function() {
    var header = document.querySelector('.header');
    if (window.scrollY > 0) {
      header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
    } else {
      header.style.backgroundColor = 'transparent';
    }
  });

document.querySelector('.burger-menu').addEventListener('click', function(){
  this.classList.toggle('active');
  document.querySelector('.menu').classList.toggle('open');
  document.querySelector('.right-menu').classList.toggle('open');
})