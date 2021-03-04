<?php

    function fu_search_route_api(){
        //register-rest-route takes 3 argument (namespace, route and array)
        register_rest_route('funiversity/v1', 'search', array(
            'methods' => WP_REST_SERVER::READABLE,
            'callback' => 'universitySearchResults'
        ));
    }

    function universitySearchResults($data){
        $mainQuery = new WP_Query(array(
            'post_type' => array('post', 'page', 'professor', 'campus','event', 'program'),
            's' => sanitize_text_field($data['term'])
        ));

        $results = array(
            'generalInfo' => array(),
            'professors' => array(),
            'campuses' => array(),
            'programs' => array(),
            'events'  => array()

        );
        while($mainQuery->have_posts()){
            $mainQuery->the_post();

            if(get_post_type() == 'post' OR get_post_type() == 'page'){
                array_push($results['generalInfo'], array(
                    'title' => get_the_title(),
                    'link' => get_the_permalink()
                ));
            }

            if(get_post_type() == 'professor'){
                array_push($results['professors'], array(
                    'title' => get_the_title(),
                    'link' => get_the_permalink()
                ));
            }

            if(get_post_type() == 'campus'){
                array_push($results['campuses'], array(
                    'title' => get_the_title(),
                    'link' => get_the_permalink()
                ));
            }

            if(get_post_type() == 'program'){
                array_push($results['programs'], array(
                    'title' => get_the_title(),
                    'link' => get_the_permalink()
                ));
            }

            if(get_post_type() == 'event'){
                array_push($results['events'], array(
                    'title' => get_the_title(),
                    'link' => get_the_permalink()
                ));
            }
           
        }

        return $results;
    }