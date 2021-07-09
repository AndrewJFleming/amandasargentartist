<?php 
    get_header(); 
?>

    <div class="page-wrap">
        <div class="container">
            
            <h1 class="page-title"><?php the_title(); ?></h1>
            
            <div class="row">
                
                <div class="col-12">
                    <?php if(has_post_thumbnail()) : ?>
                        <img class="img-fluid mb-5" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    <?php endif;?>
                </div>
                <div class="col-md-8">
                    <?php get_template_part('includes/section', 'content'); ?>
                </div>
                
                </div><!-- END First Row -->
                
            </div><!-- END container -->
    
        </div><!-- END page-wrap -->  
         
    </div><!-- END main -->    

<?php get_footer(); ?>
