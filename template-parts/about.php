<?php
$about = get_field('sect_about');
?>

<section class="about">
  <div class="container">
    <?= wp_get_attachment_image($about['decor'], 'full') ?>
    <div>
      <?php if ( $about['heading'] ): ?>
        <h2><?= $about['heading'] ?></h2>
      <?php endif ?>
      <div class="about-intro">
        <?= $about['intro'] ?>
      </div>
    </div>
  </div>
</section>


