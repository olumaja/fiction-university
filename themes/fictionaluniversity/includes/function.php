<?php

function university_features(){
    add_theme_support('title-tag');
    register_nav_menu('headermenulocation', 'Header Menu');
    register_nav_menu('footerlocationone', 'First Footer Menu');
    register_nav_menu('footerlocationtwo', 'Second Footer Menu');
}

function university_adjust_queries($query){

    //This manipulate how event is been queried
    if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query() ){
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key'       => 'event_date',
                'compare'   => '>=',
                'value'     => $today,
                'type'      => 'numeric'
            )
        ));
    }

    //This manipulte how program is been queried
    if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){
        $query->set('orderby', 'title');
        $query->set('order', 'ASC' );
    }

}