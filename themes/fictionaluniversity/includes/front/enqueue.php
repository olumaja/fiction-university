<?php
    
    function university_files(){

        $ver = FU_DEV_MODE ? time() : false;
        $url = get_theme_file_uri();

        wp_register_style('fu_main_style', esc_url(get_stylesheet_uri()));
        wp_register_style('fu_google_fonts', "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i", [], $ver);
        wp_register_style('fu_font_awesome', "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", [], $ver);

        wp_enqueue_style('fu_google_fonts');
        wp_enqueue_style('fu_font_awesome');
        wp_enqueue_style('fu_main_style');

        if(strstr($_SERVER['SERVER_NAME'], 'fictionaluniversity.local')){
            wp_register_script('main-js-script', 'http://localhost:3000/bundled.js', [], $ver, true);
        }
        else{
            wp_register_script('fu-our-vendors-js', get_theme_file_uri('/bundled-assets/vendors~scripts.8c97d901916ad616a264.js'), [], $ver, true);
            wp_enqueue_script('fu-our-vendors-js');
            wp_register_script('main-js-script', get_theme_file_uri('/bundled-assets/scripts.38d2ebed5343bcc0b61b.js'), [], $ver, true);
            wp_register_style('fu-our-styles', get_theme_file_uri('/bundled-assets/styles.38d2ebed5343bcc0b61b.css'));
            wp_enqueue_style('fu-our-styles');
        }
        wp_register_script('googleMap', "//maps.googleapis.com/maps/api/js?key=AIzaSyAL3ay0XDEJohdqxYm2sjOViA7V1VWZjNU", [], $ver, true);
        
        wp_enqueue_script('jquery');
        wp_enqueue_script('main-js-script');
        wp_enqueue_script('googleMap');

    }