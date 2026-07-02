<?php 
$link = $args['link'];
if ( !$link ) {
    error_log('components/btn-cta: No ACF link object provided');
    return;
}
?>

<a
    class="button"
    href="<?= esc_url( $link['url'] ) ?>"
    target="<?= esc_attr( $link['target'] ?: '_self' ) ?>"
>
    <?= esc_html( $link['title'] ) ?>
</a>