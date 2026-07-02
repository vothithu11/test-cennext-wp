<?php

// Two levels of menu items (parent and child).
// This component is responsible for rendering the footer menu, social networks, and contact information.

$menu_loc = get_nav_menu_locations();
if ( !isset($menu_loc['menu-footer']) ) {
  error_log('components/menu-footer: No menu location found for menu-footer');
  return;
}
$menu_id = $menu_loc['menu-footer'];

$menu_items = wp_get_nav_menu_items($menu_id);
$networks = get_field('social_network', 'menu_' . $menu_id);
$contacts = get_field('contact_info', 'menu_' . $menu_id);

if ( !empty($menu_items) ) {
    $parent_items = [];
    $child_items  = [];
    foreach ($menu_items as $item) {
      if ( empty($item->menu_item_parent) ) {
        $parent_items[] = $item;
      } else {
        $child_items[$item->menu_item_parent][] = $item;
      }
    }
}
?>

<ul class="menu-footer">
  <?php if ( !empty($menu_items) ): ?>
    <?php foreach ( $parent_items as $parent ): ?>
      <?php $has_children = isset($child_items[$parent->ID]) ?>
      <li>
        <span><?= esc_html($parent->title) ?></span>
        <?php if ( $has_children ): ?>
          <ul>
            <?php foreach ($child_items[$parent->ID] as $child): ?>
              <li>
                <a href="<?= esc_url($child->url) ?>">
                  <?= esc_html($child->title) ?>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        <?php endif ?>
      </li>
    <?php endforeach ?>
  <?php endif ?>

  <?php if ( ! empty($networks) ): ?>
    <li class="social-networks">
      <span><?= __('Follow Us') ?></span>
      <ul>
        <?php foreach ( $networks as $network ): ?>
          <li>
            <a
              target="_blank"
              class="fa-brands fa-<?= esc_attr($network['icon']) ?>"
              href="<?= esc_url( $network['url'] ) ?>"
            ></a>
          </li>
        <?php endforeach ?>
      </ul>
    </li>
  <?php endif ?>
  
  <?php if ( ! empty($contacts) ): ?>
    <li class="contact-info">
      <span><?= __('Contact Us') ?></span>
      <ul>
        <?php foreach ( $contacts as $contact ): ?>
          <li>
            <?= esc_html($contact['label']) ?>: 
            <?php if ( $contact['url'] ): ?>
              <a href="<?= esc_url($contact['url']) ?>">
                <?= esc_html($contact['content']) ?>
              </a>
            <?php else: ?>
              <?= esc_html($contact['content']) ?>
            <?php endif ?>
          </li>
        <?php endforeach ?>
      </ul>
    </li>
  <?php endif ?>
</ul>