<?php
    get_header();

    while(have_posts()){
        the_post();
?>
<div>
        <h2> <?php echo the_title(); ?></h2>
        <?php echo the_content(); ?>
</div>
<?php
    }

    get_footer();
    
?>