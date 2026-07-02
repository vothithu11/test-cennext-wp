<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <h1 class="logo"><img src="<?php echo get_template_directory_uri() ?>/assets/img/brand.webp" alt=""></h1>

    <nav class="main-navigation">
      <?php wp_nav_menu(['theme_location' => 'menu-1']); ?>
    </nav>

    <button class="menu-toggle" id="menu-open">MENU =</button>
    <button class="menu-toggle" id="menu-close">MENU x</button>
  </div>
</header>