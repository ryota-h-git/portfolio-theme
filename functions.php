<?php

function my_setup() {
  add_theme_support('post-thumbnails');
}
add_action("after_setup_theme", "my_setup");


function my_theme_enqueue_styles() {
    wp_enqueue_style(
        'swiper-style',
        get_template_directory_uri() . '/swiper/swiper-bundle.min.css',
        array(),
        filemtime(get_template_directory() . '/swiper/swiper-bundle.min.css'),
        'all'
    );
    wp_enqueue_style(
        'reset-style',
        get_template_directory_uri() . '/css/reset.css',
        array(),
        filemtime(get_template_directory() . '/css/reset.css'),
        'all'
    );
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/style.css',
        array('reset-style'), 
        filemtime(get_template_directory() . '/css/style.css'),
        'all'
    );
      wp_enqueue_style(
        'font-awesome',
        'https://use.fontawesome.com/releases/v6.5.0/css/all.css',
        array(),
        null,
        'all'
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_enqueue_scripts() {

     wp_enqueue_script(
        'swiper-js',
        get_template_directory_uri() . '/swiper/swiper-bundle.min.js',
        array(),
        null,
        true 
    );

    wp_enqueue_script(
        'split-type',
        'https://unpkg.com/split-type',
        array(),
        null,
        true  
    );

    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        '3.12.5',
        true
    );

    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        array('gsap'),
        '3.12.5',
        true
    );

     wp_enqueue_script('jquery');
    wp_enqueue_script(
        'script-name', 
        get_template_directory_uri() . '/js/script.js',
        array('jquery'), 
        filemtime(get_template_directory() . '/js/script.js'), 
        true    
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


add_filter('wpcf7_autop_or_not', '__return_false');


wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Ancizar+Serif:ital,wght@0,300..900;1,300..900&family=Noto+Sans+JP:wght@100..900&display=swap',
    array(),    
    null,
    'all'
);

function my_custom_bg_image_css() {
    $sp_img = wp_get_attachment_url(72); // SP画像ID
    $pc_img = wp_get_attachment_url(71); // PC画像ID

    $custom_css = "
      .fv {
        background: url('{$sp_img}') no-repeat center center / cover;
      }
      @media (min-width: 768px) {
        .fv {
          background: url('{$pc_img}') no-repeat center center / cover;
        }
      }
    ";

    wp_add_inline_style( 'theme-style-handle', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_custom_bg_image_css' );


?>
