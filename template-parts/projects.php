<?php
$projects = get_field('sect_projects');
?>

<section class="projects">
  <header class="container">
    <?php if ( $projects['heading'] ): ?>
      <h2><?= $projects['heading'] ?></h2>
    <?php endif ?>
    <?php if ( $projects['descr'] ): ?>
      <p><?= $projects['descr'] ?></p>
    <?php endif ?>
  </header>

  <div class="splide container">
    <div class="splide__track">
      <ol class="splide__list">
        <?php # This won't impact performance badly, as the list is capped at 10 items. ?>
        <?php foreach ($projects['list'] as $inx => $item): ?>
          <li class="splide__slide">
            <?php $p = $item['post'] ?>
            <a
              href="<?= esc_url(get_permalink($p)) ?>"
              aria-label="<?= esc_attr($p->post_title) ?>"
            >
              <?= wp_get_attachment_image($item['cover'], 'full')  ?>
              <span class="caption">
                <p class="name">
                  <strong><?= $p->post_title ?></strong>
                </p>
                <p class="note"><?= __('Hover to see details') ?></p>
              </span>
              <span class="overlay">
                <p class="name">
                  <strong><?= $p->post_title ?></strong>
                </p>
                <p class="descr">
                  <?= $p->post_excerpt ?: __('Click to learn more') ?>
                </p>
              </span>
            </a>
          </li>
        <?php endforeach ?>
      </ol>
    </div>
  </div>
</section>