<?php

    //Setup
    define('FU_DEV_MODE', true);

    //Includes
    include(get_theme_file_path('/includes/front/enqueue.php'));
    include(get_theme_file_path('/includes/function.php'));

    //Hooks
    add_action('wp_enqueue_scripts', 'university_files');
    add_action('after_setup_theme', 'university_features');

    //Shortcodes