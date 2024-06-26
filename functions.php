<?php 

function beta_theme_files() {
    wp_enqueue_script('main-beta-theme-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('main_beta_theme_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'beta_theme_files' );

function beta_theme_features() {
    add_theme_support('title-tag');
    register_nav_menu('header', 'Header Menu');
    register_nav_menu('footer', 'Footer Menu');
}

add_action('after_setup_theme', 'beta_theme_features');

function beta_theme_post_types() {
    register_post_type( 'event', array(
        'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'add_new' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar',
    ) );

    require_once(dirname(__FILE__).'/lib/services.php');

}

add_action('init', 'beta_theme_post_types');

require_once(dirname(__FILE__).'/lib/hero.php');

require_once(dirname(__FILE__).'/lib/sectionHeader.php');

require_once(dirname(__FILE__).'/lib/pageBanner.php');
    

?>