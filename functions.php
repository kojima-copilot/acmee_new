<?php
// =================================================================
// loading css and js files with time versioning
// =================================================================
function wpdevs_load_scripts()
{
    // CSS with versioning
    $css_path = get_template_directory() . '/assets/css/main.css';
    if (file_exists($css_path)) {
        $css_version = filemtime($css_path);
    } else {
        $css_version = '1.0'; // Fallback version if filemtime fails
    }
    wp_enqueue_style('wpdevs-style', get_template_directory_uri() . '/assets/css/main.css', array(), $css_version, 'all');

    // Google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    // JavaScript
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true); // jQueryを依存関係に追加



    // slick slider の CSS と JavaScript ファイルを読み込む
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array('slick-css'), '1.8.1');
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
}
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');

// =================================================================
// 機能の追加 
// =================================================================
function wpdevs_config()
{
    // Menus
    register_nav_menus(
        array(
            'acmee_main_menu' => "Main Menu",
            'acmee_footer_menu' => "Footer Menu",
        )
    );

    // Header customizer
    $args = array(
        'height' => 225,
        'width' => 1920,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails'); // add featured image
}
add_action('after_setup_theme', 'wpdevs_config', 0); // 0 is the priority(This is the fastest)
