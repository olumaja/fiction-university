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
      <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true">
      </i> Blog Home</a> <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('l, M. d Y'); ?></span></p>
    </div>
    <div class="generic-content"><?php the_content(); ?></div>
</div>
<?php
    }

    get_footer();
    
?>