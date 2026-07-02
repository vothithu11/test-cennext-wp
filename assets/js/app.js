(function () {

  let carouselItems = [];

  initApp();


  function initApp() {
    cacheDom();
    bindEvents();
    initCarousel();
    initTabs();
  }

  function cacheDom() {
    window.menuToggle = document.querySelector('.menu-toggle');
    window.nav = document.querySelector('.main-navigation');

    window.tabs = document.querySelectorAll('.tab-item');
    window.panels = document.querySelectorAll('.tab-panel');
  }

  function bindEvents() {
    menuToggle.addEventListener('click', () => {
      nav.classList.toggle('active');
    });

    tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => {
        switchTab(index);
      });
    });
  }

  function initCarousel() {
    const items = document.querySelectorAll('.carousel-item');

    carouselItems = Array.from(items);

    carouselItems.forEach((item) => {
      item.addEventListener('mouseover', () => {
        const desc = item.querySelector('.desc');
        if (desc) desc.style.display = 'block';
      });

      item.addEventListener('mouseout', () => {
        const desc = item.querySelector('.desc');
        if (desc) desc.style.display = 'none';
      });
    });
  }

  function initTabs() {
    if (tabs.length > 0) {
      switchTab(0);
    }
  }

  function switchTab(index) {
    tabs.forEach((tab) => tab.classList.remove('active'));
    panels.forEach((panel) => panel.classList.remove('active'));

    panels[index].classList.add('active');
    tabs[index].classList.add('active');
  }

})();