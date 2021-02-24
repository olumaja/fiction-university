<?php get_header(); 

if(get_field('page_banner_background_image')){
    $photo = get_field('page_banner_background_image')['sizes']['pageBanner'];
}
else{
  $photo = '';
}

pageBanner(array(
  'title' => get_the_title(),
  'subtitle' => get_field('page_banner_subtitle'),
  'photo' => $photo
  
));
  
?>

<div class="container container--narrow page-section">
    <?php
        $today = date('Ymd');
        $pastEvents = new WP_Query(array(
            'paged'          => get_query_var('paged', 1),
            'post_type'      => 'event',
            'meta_key'       => 'event_date',
            'orderby'        => 'meta_value_num',
            'order'          => 'DESC',
            'meta_query'     => array(
                array(
                    'key'       => 'event_date',
                    'compare'   => '<',
                    'value'     => $today,
                    'type'      => 'numeric'
                )
            )
        ));
        while($pastEvents->have_posts()){
            $pastEvents->the_post();
            get_template_part('template-parts/content', get_post_type());
        } 
    echo paginate_links(array(
        'total' => $pastEvents->max_num_pages
    ));
    ?>
</div>

<?php get_footer(); ?>