<?php 

function beta_theme_files() {
    wp_enqueue_script('main-beta-theme-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('main_beta_theme_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'beta_theme_files' );

?>