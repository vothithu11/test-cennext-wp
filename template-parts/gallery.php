<section class="gallery container container--2">
  <h2 class="container">Our Gallery</h2>

  <div class="carousel swiper mySwiper2">
     <div class="swiper-wrapper">
    <?php for ($i = 1; $i <= 6; $i++) : ?>
      <div class="carousel-item swiper-slide">
        <img class="carousel-img" src="https://picsum.photos/533/300" />
        <div class="desc hover">
          <h4 class="carousel-title">Project <?php echo $i; ?></h4>
          <p class="message">Hover to see details</p>
          <p class="detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vel sapien eget eros aliquam placerat.</p>
        </div>
      </div>
    <?php endfor; ?>
    </div>
     <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
  </div>
</section>