<?php
    
    function university_files(){

        $ver = FU_DEV_MODE ? time() : false;
        $url = get_theme_file_uri();

        wp_register_style('fu_main_style', esc_url(get_stylesheet_uri()));
        wp_register_style('fu_google_fonts', "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i", [], $ver);
        wp_register_style('fu_font_awesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", [], $ver);
        wp_register_style('fu_university_style', $url . '/asset/css/universitystyle.css', [], $ver);

        wp_enqueue_style('fu_google_fonts');
        wp_enqueue_style('fu_font_awesome');
        wp_enqueue_style('fu_main_style');
        wp_enqueue_style('fu_university_style');

        wp_register_script('main-js-script', get_theme_file_uri('/asset/js/scripts-bundled.js'), [], $ver, true);
        
        wp_enqueue_script('jquery');
        wp_enqueue_script('main-js-script');

    }