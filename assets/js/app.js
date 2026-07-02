(function () {
  let carouselItems = [];

  initApp();

  function initApp() {
    cacheDom();
    bindEvents();
    // initCarousel();
    initTabs();
  }

  function cacheDom() {
    window.menuToggle = document.querySelector(".menu-toggle");
    window.nav = document.querySelector(".main-navigation");

    window.tabs = document.querySelectorAll(".tab-item");
    window.panels = document.querySelectorAll(".tab-panel");
  }

  function bindEvents() {
    menuToggle.addEventListener("click", () => {
      nav.classList.toggle("active");
    });

    tabs.forEach((tab, index) => {
      tab.addEventListener("click", () => {
        switchTab(index);
      });
    });
  }

  function initCarousel() {
    const items = document.querySelectorAll(".carousel-item");

    carouselItems = Array.from(items);

    carouselItems.forEach((item) => {
      item.addEventListener("mouseover", () => {
        const desc = item.querySelector(".desc");
        if (desc) desc.style.display = "block";
      });

      item.addEventListener("mouseout", () => {
        const desc = item.querySelector(".desc");
        if (desc) desc.style.display = "none";
      });
    });
  }

  function initTabs() {
    if (tabs.length > 0) {
      switchTab(0);
    }
  }

  function switchTab(index) {
    tabs.forEach((tab) => tab.classList.remove("active"));
    panels.forEach((panel) => panel.classList.remove("active"));
    if (!panels[index]) {
      console.warn("Missing tab panel at index:", index);
      return;
    }

    tabs[index].classList.add("active");
    panels[index].classList.add("active");
  }

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 50,
    loop: true,
    autoplay: {
      delay: 3000,
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    }
  });

  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    loop: true,
    spaceBetween: 15,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 5,
      },
    },
  });
})();
