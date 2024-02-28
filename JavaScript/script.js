window.addEventListener('scroll', function() {
    var header = document.querySelector('.header');
    if (window.scrollY > 0) {
      header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
    } else {
      header.style.backgroundColor = 'transparent';
    }
  });