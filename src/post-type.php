<?php

//Register custom post type
function custom_post_type_qr_codes() {
    $supports = array(
        'title', // post title
        // 'editor', // post content
        // 'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        // 'custom-fields', // custom fields
        // 'revisions', // post revisions
        // 'post-formats', // post formats
    );
    $labels = array(
        'name' => _x('QR code', 'plural'),
        'singular_name' => _x('QR code', 'singular'),
        'menu_name' => _x('QR code', 'admin menu'),
        'name_admin_bar' => _x('QR code', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New QR code'),
        'new_item' => __('New QR code'),
        'edit_item' => __('Edit QR code'),
        'view_item' => __('View QR code'),
        'all_items' => __('All QR code'),
        'search_items' => __('Search QR code'),
        'not_found' => __('No QR code found.'),
    );
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'menu_icon' => 'dashicons-schedule',
        'rewrite' => array('slug' => 'qrcode'),
        'has_archive' => false,
        // 'hierarchical' => false,
    );
    register_post_type('QR code', $args);
    }
    
    
    add_action( 'init', 'custom_post_type_qr_codes' );