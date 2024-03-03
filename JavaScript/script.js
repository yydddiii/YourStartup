var counterForHeader = 0

//функция бургер открытие(закрытие) меню
document.querySelector('.burger-menu').addEventListener('click', function(){
  var header = document.querySelector('.header');
  this.classList.toggle('active');
  document.querySelector('.menu').classList.toggle('menu_visible');
  document.querySelector('.right-menu').classList.toggle('menu_visible');
  // проверка для корректного отопражения backgroundColor у header
  if(counterForHeader === 0){
    counterForHeader = 1;
    header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
  }else if(window.scrollY > 0){
    counterForHeader = 0;
  }else{
    counterForHeader = 0;
  header.style.backgroundColor = 'transparent';
  };
});

//функция замены backgroundColor шапки при скролле страницы
window.addEventListener('scroll', function() {
  var header = document.querySelector('.header');
  if(window.scrollY === 0 && counterForHeader === 0){
    header.style.backgroundColor = 'transparent';
  }else if (window.scrollY > 0) {
    header.style.backgroundColor = 'rgba(255, 255, 255, 1)';
  };
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
  };
  document.querySelector('.application__select-arrow').classList.toggle('arrow-active');
});

//функция вызова меню заказов
function applicationCall(){
  document.querySelector('.application').classList.toggle('called');
  document.querySelector('.header').classList.toggle('hide');
  document.getElementById('application__name-input').value = '';
  document.getElementById('application__phone-number-input').value = '';
  document.getElementById('application__email-input').value = '';
};

//функция закрытия меню заказов
document.querySelector('.application__cross-img').addEventListener('click', function(){
  document.querySelector('.application').classList.toggle('called');
  document.querySelector('.header').classList.toggle('hide');
  document.querySelector('.application__error-name').classList.remove('active-error');
  document.querySelector('.application__error-phone').classList.remove('active-error');
  document.querySelector('.application__error-bottom').classList.remove('bottom-active-error');
  document.querySelector('.application__error-call').classList.remove('active-error-call');
  document.getElementById('application__error-name').innerText = '';
  document.getElementById('application__error-phone').innerText = '';
  document.getElementById('application__error-email').innerText = '';
  document.getElementById('application__error-rate').innerText = '';
  document.getElementById('application__select-rate-text').innerText = 'Тариф';
});

// функция замены текста в application__select-rate-text
function changeRate(element){
  var ratetext = document.getElementById(element).innerText;
  var submenu_wrapper = document.querySelector('.application__submenu-rate-wrapper');
  document.querySelector('.application__select-arrow').classList.toggle('arrow-active');
  submenu_wrapper.style.visibility = "hidden";
  submenu_wrapper.style.opacity = 0;
  document.getElementById('application__select-rate-text').innerText = ratetext;
};

// функция кнопки 'отправить' в меню заказов. осталось написать проверку телефона и емайла 
function applicationCheck(){
  var counterForErrorApplication = 0;
  let valPhone = /^(\+7|7|8)?[\s\-]?\(?[0-9]{3}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
  let valEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var application_name = document.getElementById('application__name-input').value;
  var application_phone = document.getElementById('application__phone-number-input').value;
  var application_email = document.getElementById('application__email-input').value;
  var application_rate = document.getElementById('application__select-rate-text').innerText;
  if(application_name === ''){
    counterForErrorApplication = counterForErrorApplication + 1;
    document.querySelector('.application__error-name').classList.remove('active-error');
    document.getElementById('application__error-name').innerText = 'Обязательное поле';
    document.querySelector('.application__error-name').classList.toggle('active-error');
  }else{
    document.getElementById('application__error-name').innerText = '';
    document.querySelector('.application__error-name').classList.remove('active-error');
  };
  if(application_phone === ''){
    counterForErrorApplication = counterForErrorApplication + 1;
    document.querySelector('.application__error-phone').classList.remove('active-error');
    document.getElementById('application__error-phone').innerText = 'Обязательное поле';
    document.querySelector('.application__error-phone').classList.toggle('active-error');
  }else{
    if(!valPhone.test(application_phone)){
      console.log('Не соответствует');
      counterForErrorApplication = counterForErrorApplication + 1;
      document.querySelector('.application__error-phone').classList.remove('active-error');
      document.getElementById('application__error-phone').innerText = 'Ведикте корректные данные';
      document.querySelector('.application__error-phone').classList.toggle('active-error');
    }else{
    document.getElementById('application__error-phone').innerText = '';
    document.querySelector('.application__error-phone').classList.remove('active-error');
    console.log('соответствует');
    };
  };
  if(application_email === ''){
    counterForErrorApplication = counterForErrorApplication + 1;
    document.querySelector('.application__error-bottom').classList.remove('bottom-active-error');
    document.getElementById('application__error-email').innerText = 'Обязательное поле';
    document.querySelector('.application__error-bottom').classList.toggle('bottom-active-error');
  }else{
    if(!valEmail.test(application_email)){
      counterForErrorApplication = counterForErrorApplication + 1;
      document.querySelector('.application__error-bottom').classList.remove('bottom-active-error');
      document.getElementById('application__error-email').innerText = 'Введите корректные данные';
      document.querySelector('.application__error-bottom').classList.toggle('bottom-active-error');
    }else{
    document.getElementById('application__error-email').innerText = '';
    document.querySelector('.application__error-bottom').classList.remove('bottom-active-error');
    console.log('соответствует');
    };
  };
  if(application_rate === 'Тариф'){
    counterForErrorApplication = counterForErrorApplication + 1;
    document.querySelector('.application__error-call').classList.remove('active-error-call');
    document.getElementById('application__error-rate').innerText = 'Обязательное поле';
    document.querySelector('.application__error-call').classList.toggle('active-error-call');
  }else{
    document.getElementById('application__error-rate').innerText = '';
    document.querySelector('.application__error-call').classList.remove('active-error-call');
  };
  if(counterForErrorApplication === 0){
    document.querySelector('.application').classList.toggle('called');
    document.querySelector('.application-end').classList.toggle('called');
  };
};

// функция для кнопки application-end__left-button
function applicationEnd(){
  document.querySelector('.application-end').classList.toggle('called');
  document.querySelector('.application').classList.toggle('called');
  document.getElementById('application__name-input').value = '';
  document.getElementById('application__phone-number-input').value = '';
  document.getElementById('application__email-input').value = '';
};

// функция закрывания окна при нажатии на крестик
document.querySelector('.application-end__cross-img').addEventListener('click', function(){
  document.querySelector('.application-end').classList.toggle('called');
  document.querySelector('.header').classList.toggle('hide');
});
