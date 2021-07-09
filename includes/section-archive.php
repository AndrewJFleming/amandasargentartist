<?php if( have_posts() ): while( have_posts() ): the_post();?>

    <!-- Determines how many columns per row for gallery -->
    <div class="col-12 col-sm-6 col-md-4 col-lg-4 d-flex thumb-container">
        <?php if(has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>">
                <img src="<?php the_post_thumbnail_url('');?>" alt="<?php the_title();?>" class="img-thumbnail">
            </a>
        <?php endif;?>
    </div>

<?php endwhile; else: endif;?>