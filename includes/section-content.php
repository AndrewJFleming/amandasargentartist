<?php if( have_posts() ): while( have_posts() ): the_post();?>
    
    <?php if(has_post_thumbnail()) : ?>

        <div class="floatImg-wrapper">
            <img class="floatImg" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </div>
    
    <?php endif;?>

    <?php the_content();?>
 
<?php endwhile; else: endif;?>