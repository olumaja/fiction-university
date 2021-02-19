<?php

function university_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('profLandscape', 400, 260, true);
    add_image_size('profPortrait', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);
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

//This function handle fallback for page banners
function pageBanner($args = NULL){
    if(!$args['title']){
        $args['title'] = 'Temporal title';
    }

    if(!$args['subtitle']){
        $args['subtitle'] = 'Temporal subtitle';
    }

    if(!$args['photo']){

        $args['photo'] = get_theme_file_uri('/asset/images/ocean.jpg');
        
    }

?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo'] ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle'] ?></p>
      </div>
    </div>  
</div>

<?php 

}