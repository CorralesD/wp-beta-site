<?php

register_post_type( 'service', array(
    'supports' => array('title', 'editor', 'excerpt', 'custom-fields'),
    'rewrite' => array('slug' => 'services'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true,
    'labels' => array(
        'name' => 'Services',
        'add_new_item' => 'Add New Service',
        'add_new' => 'Add New Service',
        'edit_item' => 'Edit Service',
        'all_items' => 'All Services',
        'singular_name' => 'Service'
    ),
    'menu_icon' => 'dashicons-groups',
) );