<?php get_header();?>

<?php
    if(function_exists('the_custom_logo')){
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id);
    }
?>

<div class="container">
<?php
    if ( have_posts() ) : while ( have_posts() ): the_post(); ?>

    <div id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
        <div class="post-excerpt"><?php the_excerpt(); ?></div>
    </div>

    <?php endwhile;
    endif;
?>
</div>
    


<?php get_footer();?>