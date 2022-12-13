/* ------------------ cookie ------------------ */

let cookie = document.querySelector('.cookie');
document.querySelector('.sub').addEventListener( "click" , () => {
  cookie.classList.add('is-show');
});
document.querySelector('.res').addEventListener( "click" , () => {
  cookie.classList.add('is-show');
});

/* ------------------ header menu hover ------------------ */

const $ = s => document.querySelector(s);
const $$ = s => document.querySelectorAll(s);

const padding = 30;
const margin = 45;
const activeMenuItemClass = 'menu__item--selected';
let defaultElement = $('.' + activeMenuItemClass);


$$('.menu__item').forEach(el => {
  el.addEventListener('mouseover', ev => onHoverMenuItem(ev.target));
  el.addEventListener('mouseout', ev => onOutMenuItem(ev.target));
  el.addEventListener('click', ev => onClickMenuItem(ev.target));
});

function onClickMenuItem(element) {
  element.parentNode.querySelector('.' + activeMenuItemClass).classList.remove(activeMenuItemClass);
  element.classList.add(activeMenuItemClass);
  defaultElement = element;
  onHoverMenuItem(element);
};

// выделяем элемент по умолчанию
onHoverMenuItem(defaultElement);
function onOutMenuItem(element) {
  onHoverMenuItem(defaultElement);
  const colorHover = $('.menu__item--selected');
  colorHover.style.color = '#1E1E1E';
};

function onHoverMenuItem(element) {
  const hover = $('.menu__item ~ .menu__hover');
  const itemRect = element.getBoundingClientRect();
  hover.style.left =  itemRect.left - padding + margin + "px";
  hover.style.width = itemRect.width - padding + "px";
  const colorHover = $('.menu__item--selected');
  colorHover.style.color = '#fff';
};

/* ------------------ footer form ------------------ */

document.addEventListener('DOMContentLoaded', function(){
  const form = document.getElementById('form'); 
  form.addEventListener('submit', formSend);
  
  async function formSend(e) {
    e.preventDefault();

    let error = formValidate(form);

    let formData = new FormData(form);

    if (error === 0) {
      let response = await fetch('sendemail.php', {
        method: 'POST',
        body: formData
      });
      if (response.ok) {
        let result = await response.json();
        alert(result.message);
        form.reset();
      } else {
        alert('Ошибка! Что-то пошло не так.')
      }
    } else {
      alert('Заполните обязательные поля'); // Сделать иначе
    }
  }

  function formValidate(form) {
    let error = 0;
    let formReq = document.querySelectorAll('.--req');

    for (let index = 0; index < formReq.length; index++) {
      const input = formReq[index];
      formRemoveError(input);

      if (input.classList.contains('--email')) {
        if (emailTest(input)) {
          formAddError(input);
          error++;
        }
      } else {
        if (input.value === '') {
          formAddError(input);
          error++;
        }
      }
    }
    return error;
  }

  function formAddError(input) {
    input.parentElement.classList.add('--error');
    input.classList.add('--error');
  }

  function formRemoveError(input) {
    input.parentElement.classList.remove('--error');
    input.classList.remove('--error');
  }
  // function to checked email
  function emailTest(input) {
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
  }
});