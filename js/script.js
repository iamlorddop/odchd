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
}

// выделяем элемент по умолчанию
onHoverMenuItem(defaultElement);
function onOutMenuItem(element) {
  onHoverMenuItem(defaultElement);
  const colorHover = $('.menu__item--selected');
  colorHover.style.color = '#1E1E1E';
}

function onHoverMenuItem(element) {
  const hover = $('.menu__item ~ .menu__hover');
  const itemRect = element.getBoundingClientRect();
  hover.style.left =  itemRect.left - padding + margin + "px";
  hover.style.width = itemRect.width - padding + "px";
  const colorHover = $('.menu__item--selected');
  colorHover.style.color = '#fff';
}