<?php
function cennos_tms_interview_enqueue_assets()
{
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/dist/style.min.css',
        [],
        false
    );

    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-bundle.min.css',
        [],
        null
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/dist/production.min.js',
        ['swiper-js'],
        false,
        true
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-bundle.min.js',
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'cennos_tms_interview_enqueue_assets');
