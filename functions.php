<?php
function cennos_tms_interview_enqueue_assets() {
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/dist/style.min.css',
        [],
        false
    );

     wp_enqueue_style(
        'splide-style',
        "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css",
        [],
        false
    );

    wp_enqueue_script(
        'splide-js',
        "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js",
        [],
        false,
        true
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/dist/production.min.js',
        ['splide-js'],
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'cennos_tms_interview_enqueue_assets');