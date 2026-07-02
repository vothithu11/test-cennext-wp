<section class="gallery">
  <h2>Our Gallery</h2>
  <div class="splide" aria-label="Gallery Carousel">
<div class="splide__track">
  <div class="carousel splide__list">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <div class="carousel-item splide__slide">
        <img src="https://picsum.photos/533/300" />
        <h4>Project <?php echo $i; ?></h4>
        <p class="desc">Hover to see details</p>
      </div>
    <?php endfor; ?>
  </div></div></div>
</section>