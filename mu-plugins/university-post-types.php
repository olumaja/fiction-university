<?php

function university_post_types(){

    //Events custom post type
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
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'events' ),
        'menu_position'     => 20,
        'capability_type'   => 'post',
        'menu_icon'     => 'dashicons-calendar',
        'supports' => array('title', 'editor', 'author', 'excerpt', 'comments')
    ));

    //Programs custom post type
    $labels = array(
        'name'                  => __( 'Programs', 'Post type general name', 'fictionuniversity' ),
        'singular_name'         => _x( 'Program', 'Post type singular name', 'fictionuniversity' ),
        'menu_name'             => _x( 'Programs', 'Admin Menu text', 'fictionuniversity' ),
        'name_admin_bar'        => _x( 'Program', 'Add New on Toolbar', 'fictionuniversity' ),
        'add_new'               => __( 'Add New', 'fictionuniversity' ),
        'add_new_item'          => __( 'Add New Program', 'fictionuniversity' ),
        'new_item'              => __( 'New Program', 'fictionuniversity' ),
        'edit_item'             => __( 'Edit Program', 'fictionuniversity' ),
        'view_item'             => __( 'View Program', 'fictionuniversity' ),
        'all_items'             => __( 'All Programs', 'fictionuniversity' ),
        'search_items'          => __( 'Search Programs', 'fictionuniversity' ),
        'parent_item_colon'     => __( 'Parent Programs:', 'fictionuniversity' ),
        'not_found'             => __( 'No Programs found.', 'fictionuniversity' ),
        'not_found_in_trash'    => __( 'No Programs found in Trash.', 'fictionuniversity' ),
        'featured_image'        => _x( 'Program Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'archives'              => _x( 'Program archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'fictionuniversity' ),
        'insert_into_item'      => _x( 'Insert into Program', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'fictionuniversity' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Program', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'fictionuniversity' ),
        'filter_items_list'     => _x( 'Filter Programs list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'fictionuniversity' ),
        'items_list_navigation' => _x( 'Programs list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'fictionuniversity' ),
        'items_list'            => _x( 'Programs list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'fictionuniversity' ),
    );

    register_post_type('program', array(
        'labels'            => $labels,
        'description'       => 'See all our programs',
        'public'            => true,
        'has_archive'       => true,
        'hierarchical'      => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'programs' ),
        'menu_position'     => 21,
        'capability_type'   => 'post',
        'menu_icon'     => 'dashicons-awards',
        'supports' => array('title', 'editor', 'comments')
    ));

    //Professors custom post type
    $labels = array(
        'name'                  => __( 'Professors', 'Post type general name', 'fictionuniversity' ),
        'singular_name'         => _x( 'Professor', 'Post type singular name', 'fictionuniversity' ),
        'menu_name'             => _x( 'Professors', 'Admin Menu text', 'fictionuniversity' ),
        'name_admin_bar'        => _x( 'Professor', 'Add New on Toolbar', 'fictionuniversity' ),
        'add_new'               => __( 'Add New', 'fictionuniversity' ),
        'add_new_item'          => __( 'Add New Professor', 'fictionuniversity' ),
        'new_item'              => __( 'New Professor', 'fictionuniversity' ),
        'edit_item'             => __( 'Edit Professor', 'fictionuniversity' ),
        'view_item'             => __( 'View Professor', 'fictionuniversity' ),
        'all_items'             => __( 'All Professors', 'fictionuniversity' ),
        'search_items'          => __( 'Search Professors', 'fictionuniversity' ),
        'parent_item_colon'     => __( 'Parent Professors:', 'fictionuniversity' ),
        'not_found'             => __( 'No Professors found.', 'fictionuniversity' ),
        'not_found_in_trash'    => __( 'No Professors found in Trash.', 'fictionuniversity' ),
        'featured_image'        => _x( 'Professor Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'archives'              => _x( 'Professor archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'fictionuniversity' ),
        'insert_into_item'      => _x( 'Insert into Professor', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'fictionuniversity' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Professor', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'fictionuniversity' ),
        'filter_items_list'     => _x( 'Filter Professors list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'fictionuniversity' ),
        'items_list_navigation' => _x( 'Professors list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'fictionuniversity' ),
        'items_list'            => _x( 'Professors list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'fictionuniversity' ),
    );

    register_post_type('professor', array(
        'labels'            => $labels,
        'public'            => true,
        'hierarchical'      => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'menu_position'     => 22,
        'capability_type'   => 'post',
        'menu_icon'     => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail')
    ));

    //Campus custom post type
    $labels = array(
        'name'                  => __( 'Campuses', 'Post type general name', 'fictionuniversity' ),
        'singular_name'         => _x( 'Campus', 'Post type singular name', 'fictionuniversity' ),
        'menu_name'             => _x( 'Campuses', 'Admin Menu text', 'fictionuniversity' ),
        'name_admin_bar'        => _x( 'Campus', 'Add New on Toolbar', 'fictionuniversity' ),
        'add_new'               => __( 'Add New', 'fictionuniversity' ),
        'add_new_item'          => __( 'Add New Campus', 'fictionuniversity' ),
        'new_item'              => __( 'New Campus', 'fictionuniversity' ),
        'edit_item'             => __( 'Edit Campus', 'fictionuniversity' ),
        'view_item'             => __( 'View Campus', 'fictionuniversity' ),
        'all_items'             => __( 'All Campuses', 'fictionuniversity' ),
        'search_items'          => __( 'Search Campuses', 'fictionuniversity' ),
        'parent_item_colon'     => __( 'Parent Campuses:', 'fictionuniversity' ),
        'not_found'             => __( 'No Campuses found.', 'fictionuniversity' ),
        'not_found_in_trash'    => __( 'No Campuses found in Trash.', 'fictionuniversity' ),
        'featured_image'        => _x( 'Campus Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'fictionuniversity' ),
        'archives'              => _x( 'Campus archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'fictionuniversity' ),
        'insert_into_item'      => _x( 'Insert into Campus', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'fictionuniversity' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Campus', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'fictionuniversity' ),
        'filter_items_list'     => _x( 'Filter Campuses list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'fictionuniversity' ),
        'items_list_navigation' => _x( 'Campuses list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'fictionuniversity' ),
        'items_list'            => _x( 'Campuses list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'fictionuniversity' ),
    );

    register_post_type('campus', array(
        'labels'            => $labels,
        'public'            => true,
        'hierarchical'      => false,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'menu_position'     => 23,
        'capability_type'   => 'post',
        'menu_icon'         => 'dashicons-location-alt',
        'supports'          => array('title', 'editor', 'excerpt'),
        'rewrite'           => array('slug' => 'campuses'),
        'has_archive'       => true,
        'description'       => 'See all our campus',
    ));

}

add_action('init', 'university_post_types');