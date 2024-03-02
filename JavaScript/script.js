var counterForHeader = 0

//функция бургер открытия(закрытия) меню
document.querySelector('.burger-menu').addEventListener('click', function(){
  var header = document.querySelector('.header');
  this.classList.toggle('active');
  document.querySelector('.menu').classList.toggle('menu_visible');
  document.querySelector('.right-menu').classList.toggle('menu_visible');
  // проверка для корректного отопражения backgroundColor у header
  if(counterForHeader === 0){
    counterForHeader = 1
    header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
  }else if(window.scrollY > 0){
    counterForHeader = 0
  }else{
    counterForHeader = 0
  header.style.backgroundColor = 'transparent';
  }
})

//функция замены backgroundColor шапки при скролле страницы
window.addEventListener('scroll', function() {
  var header = document.querySelector('.header');
  if(window.scrollY === 0 && counterForHeader === 0){
    header.style.backgroundColor = 'transparent';
  }else if (window.scrollY > 0) {
    header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
  }
});

// функция для отображения(скрытия) выпадающего списка application
document.querySelector('.application__select-rate').addEventListener('click', function(){
  this.classList.toggle('open_menu');
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

//функция вызова меню окна заказов
function applicationCall(){
  document.querySelector('.application').classList.toggle('called')
  document.querySelector('.header').classList.toggle('hide')
};

//функция закрытия меню заказов
document.querySelector('.application__cross-img').addEventListener('click', function(){
  document.querySelector('.application').classList.toggle('called')
  document.querySelector('.header').classList.toggle('hide')
});

// функция замены текста в application__select-rate-text
function changeRate(element){
  var ratetext = document.getElementById(element).innerText;
  var submenu_wrapper = document.querySelector('.application__submenu-rate-wrapper');
  document.querySelector('.application__select-arrow').classList.toggle('arrow-active')
  submenu_wrapper.style.visibility = "hidden";
  submenu_wrapper.style.opacity = 0;
  document.getElementById('application__select-rate-text').innerText = ratetext;
}

// базовая локига application. еще будет доделываться
function applicationCheck(){
  var counterForErrorApplication = 0
  var application_name = document.getElementById('application__name-input').value;
  var application_phone = document.getElementById('application__phone-number-input').value;
  var application_email = document.getElementById('application__email-input').value;
  var application_rate = document.getElementById('application__select-rate-text').innerText
  if(application_name === ''){
    counterForErrorApplication = counterForErrorApplication + 1;
    document.getElementById('application__error-name').innerText = 'Обязательное поле';
    document.querySelector('.application__error-name').classList.toggle('active-error');
  }
  if(application_phone === ''){
    counterForErrorApplication = counterForErrorApplication + 1;
    document.getElementById('application__error-phone').innerText = 'Обязательное поле';
    document.querySelector('.application__error-phone').classList.toggle('active-error');
  } 
  if(application_email === ''){
    counterForErrorApplication = counterForErrorApplication + 1;
    document.getElementById('application__error-email').innerText = 'Обязательное поле';
    document.querySelector('.application__error-bottom').classList.toggle('bottom-active-error');
  }
  if(application_rate === ''){
    counterForErrorApplication = counterForErrorApplication + 1;
    document.getElementById('application__error-rate').innerText = 'Обязательное поле';
    document.querySelector('.application__error-rate').classList.toggle('active-error');
  }
  if(counterForErrorApplication === 0){
    document.querySelector('.application').classList.toggle('called')
    document.querySelector('.header').classList.toggle('hide')
  }
};