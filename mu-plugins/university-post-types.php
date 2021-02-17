<?php

function university_post_types(){

    $labels = array(
        'name'                  => __( 'Events', 'Post type general name', 'fictionuniversity' ),
        'singular_name'         => _x( 'Event', 'Post type singular name', 'fictionuniversity' ),
        'menu_name'             => _x( 'Events', 'Admin Menu text', 'fictionuniversity' ),
        'name_admin_bar'        => _x( 'Event', 'Add New on Toolbar', 'fictionuniversity' ),
        'add_new'               => __( 'Add New', 'fictionuniversity' ),
        'add_new_item'          => __( 'Add New Event', 'fictionuniversity' ),
        'new_item'              => __( 'New Event', 'fictionuniversity' ),
        'edit_item'             => __( 'Edit Event', 'fictionuniversity' ),
        'view_item'             => __( 'View Event', 'fictionuniversity' ),
        'all_items'             => __( 'All Events', 'fictionuniversity' ),
        'search_items'          => __( 'Search Events', 'fictionuniversity' ),
        'parent_item_colon'     => __( 'Parent Events:', 'fictionuniversity' ),
        'not_found'             => __( 'No Events found.', 'fictionuniversity' ),
        'not_found_in_trash'    => __( 'No Events found in Trash.', 'fictionuniversity' ),
        'featured_image'        => _x( 'Event Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'archives'              => _x( 'Event archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'fictionuniversity' ),
        'insert_into_item'      => _x( 'Insert into Event', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'fictionuniversity' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Event', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'fictionuniversity' ),
        'filter_items_list'     => _x( 'Filter Events list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'fictionuniversity' ),
        'items_list_navigation' => _x( 'Events list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'fictionuniversity' ),
        'items_list'            => _x( 'Events list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'fictionuniversity' ),
    );

    register_post_type('event', array(
        'labels'            => $labels,
        'description'       => 'See all our upcoming events',
        'public'            => true,
        'has_archive'       => true,
        'hierarchical'      => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'events' ),
        'show_in_menu'      => true,
        'menu_position'     => 20,
        'capability_type'   => 'post',
        'menu_icon'     => 'dashicons-calendar',
        'support' => array('title', 'editor', 'author', 'excerpt', 'thumbnail', 'comments')
    ));
}

add_action('init', 'university_post_types');