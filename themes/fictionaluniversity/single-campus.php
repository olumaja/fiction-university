<?php
    get_header();

    while(have_posts()){
        the_post();

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
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('campus'); ?>"><i class="fa fa-home" aria-hidden="true">
      </i> All Campuses</a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
    <div class="generic-content"><?php the_content(); ?></div>

    <div class="acf-map">
        <?php
            $mapLocation = get_field('map_location');

        ?>
            <div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
              <h3><?php the_title(); ?></h3>
              <?php echo $mapLocation['address']; ?>
            </div>
   </div>

    <?php

        //Program custom query for relationship
        $relatedPrograms = new WP_Query(array(
            'post_type'     => 'program',
            'posts_per_page' => -1,
            'orderby'       => 'title',
            'order'         => 'ASC',
            'meta_query'    => array(
                array(
                'key' => 'related_campus',
                'compare' => 'LIKE',
                'value' => '"' . get_the_ID() . '"'
                )
            )
        ));

        if($relatedPrograms->have_posts()){

            echo '<hr class="section-break">';
            echo '<h2 class="headline headline--medium"> Programs available at this campus:</h2>';
            echo '<ul class="min-list link-list ">';
            while($relatedPrograms->have_posts()){
                $relatedPrograms->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php } 
            echo '</ul>';
        } 
        wp_reset_postdata();

            //Event custom query for relationship
            // $today = date('Ymd');
            // $eventPost = new WP_Query(array(
            //     'post_type'     => 'event',
            //     'posts_per_page' => 2,
            //     'meta_key'      => 'event_date',
            //     'orderby'       => 'meta_value_num',
            //     'order'         => 'ASC',
            //     'meta_query'    => array(
            //         array(
            //             'key'   => 'event_date',
            //             'compare' => '>=',
            //             'value' => $today,
            //             'type' => 'numeric'
            //         ),
            //         array(
            //           'key' => 'related_programs',
            //           'compare' => 'LIKE',
            //           'value' => '"' . get_the_ID() . '"'
            //         )
            //     )
            // ));

            // if($eventPost->have_posts()){

            //   echo '<hr class="section-break">';
            //   echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() . ' Events</h2>';

            //   while($eventPost->have_posts()){
            //       $eventPost->the_post();
            //       get_template_part('template-parts/content', get_post_type());
            //   } 

            // } 
        ?>

</div>
<?php
    }

    get_footer();
    
?>