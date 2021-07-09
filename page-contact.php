<?php
    get_header();
?>

    <div class="page-wrap">
        <div class="container">
            
            <h1 class="page-title"><?php the_title(); ?></h1>
            
            <div class="row">

                <!-- Contact Form 7 -->
                <div class="col-md-7 col-lg-6 offset-lg-1 contact">
                    <?php if( have_posts() ): while( have_posts() ): the_post();?>
                        <?php the_content();?>
                    <?php endwhile; else: endif;?>
                </div>

                <!-- Contact Page Image -->
                <div class="col-md-5 col-lg-5 contact-image">
                    <?php if(has_post_thumbnail()) : ?>
                        <img class="img-fluid mb-5" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <?php endif;?>
                </div>
                
                </div><!-- END First Row -->
                
            </div><!-- END container -->
    
        </div><!-- END page-wrap -->  
         
    </div><!-- END main -->    

<?php
    get_footer();
?>