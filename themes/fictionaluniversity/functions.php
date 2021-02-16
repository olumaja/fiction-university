<?php

    //Setup
    define('FU_DEV_MODE', true);

    //Includes
    include(get_theme_file_path('/includes/front/enqueue.php'));

    //Hooks
    add_action('wp_enqueue_scripts', 'university_files');

    //Shortcodes