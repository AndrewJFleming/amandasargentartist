<?php
    get_header();
?>

    <div class="page-wrap">
        <div class="container">
            
            <h1 class="page-title"><?php echo single_cat_title();?></h1>

            <div class="row">

                <!-- Gallery Column -->
                <div class="col-sm-12">

                    <!-- Reference section-archive.php -->
                    <div class="row d-flex align-items-start">
                        <?php get_template_part('includes/section', 'archive');?>
                    </div>

                    <!-- Next/Previous Page -->
                    <div class="page-nav">                        
                        <?php previous_posts_link();?>
                        <?php next_posts_link();?>
                    </div>

                    </div><!-- END Gallery Column -->
                
                </div><!-- END First Row -->
                
            </div><!-- END container -->
    
        </div><!-- END page-wrap -->  
         
    </div><!-- END main -->     

<?php
    get_footer();
?>