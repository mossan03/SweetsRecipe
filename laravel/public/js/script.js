const button = document.querySelector('.button-menu');
const nav = document.querySelector('.menu-wrapper');

button.addEventListener('click', () => {
  nav.classList.toggle('open-menu')
  button.innerHTML = button.innerHTML === 'メニュー'
    ? '閉じる'
    : 'メニュー'
});