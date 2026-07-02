document.addEventListener('DOMContentLoaded', () => {
  init_menu_toggle()
});


function init_menu_toggle() {
  document.querySelector('#menu-open').addEventListener('click', () => {
    document.querySelector('.site-header .main-navigation')
      .classList.add('active')
  });

  document.querySelector('#menu-close').addEventListener('click', () => {
    document.querySelector('.site-header .main-navigation')
      .classList.remove('active')
  });
}