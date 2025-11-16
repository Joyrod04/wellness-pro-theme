<?php
/**
 * Theme setup functions for Wellness Pro Services & Solutions
 */

function wellness_pro_setup() {
    // Add support for custom logo
    add_theme_support('custom-logo', [
        'height' => 100,
        'width' => 400,
    ]);

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register custom post types
    register_post_type('services', [
        'labels' => [
            'name' => __('Services'),
            'singular_name' => __('Service'),
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);

    // Register menus
    register_nav_menus([
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu'),
    ]);  

    // Add support for widgets
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'wellness_pro_setup');

// Theme customization options
function wellness_pro_customizer($wp_customize) {
    $wp_customize->add_section('wellness_pro_theme_options', [
        'title' => __('Theme Options'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('footer_text', [
        'default' => __('Copyright &copy; 2025 Wellness Pro Services & Solutions'),
    ]);

    $wp_customize->add_control('footer_text', [
        'label' => __('Footer Text'),
        'section' => 'wellness_pro_theme_options',
        'type' => 'text',
    ]);
}
add_action('customize_register', 'wellness_pro_customizer');
?>