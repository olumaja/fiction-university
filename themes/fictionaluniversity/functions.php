<?php

    //Setup
    define('FU_DEV_MODE', true);

    //Includes
    include(get_theme_file_path('/includes/front/enqueue.php'));
    include(get_theme_file_path('/includes/function.php'));
    include(get_theme_file_path('/includes/search-route-rest.php'));

    //Hooks
    add_action('wp_enqueue_scripts', 'university_files');
    add_action('after_setup_theme', 'university_features');
    add_action('pre_get_posts', 'university_adjust_queries');
    add_action('rest_api_init', 'fu_custom_rest_api');
    add_action('rest_api_init', 'fu_search_route_api');
    add_filter('acf/fields/google_map/api', 'universityMapKey');

    //Shortcodes