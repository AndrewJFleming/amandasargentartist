<?php
    get_header();
?>

    <div class="page-wrap">
        <div class="container single-painting-wrap">

            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-8 content-column">

                    <!-- Trigger the Modal -->
                    <?php if(has_post_thumbnail()):?>
                        <div class="myImg-container">
                            <img id="myImg" src="<?php the_post_thumbnail_url('');?>" alt="<?php the_title();?>" class="img-fluid img-thumbnail">
                        </div>

                        <!-- Display Assigned 'Mediums and Dimensions' Taxonomies -->
                        <h2 class="painting-page-title"><?php the_title();?></h2>
                        <div class="category-labels">
                            <?php
                            // Get terms for post
                            $terms = get_the_terms( $post->ID , 'mediums-and-dimensions' );

                            // Loop over each item since it's an array
                            if ( $terms != null ){
                            foreach( $terms as $term ) {
                            // Print the name method from $term which is an OBJECT
                            ?> <p><?php echo $term->slug ;?></p><?php
                            // Get rid of the other data stored in the object, since it's not needed
                            unset($term);
                            } } ?>
                        </div>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <!-- The Close Button -->
                            <span class="close">&times;</span>
                            <!-- Modal Content (The Image) -->
                            <img class="modal-content" id="img01">
                            <!-- Modal Caption (Image Text) -->
                            <div id="caption"></div>
                            <!-- Modal Overlay -->
                            <div id="modalOverlay"></div>
                        </div>

                        <?php endif;?>
                        <!-- END Trigger the Modal -->

                        <?php get_template_part('includes/section', 'paintings'); ?>

                    </div>
                        
                    <!-- Enquiry Column -->
                    <div class="col-lg-4 enquiry-column">

                        <!-- Enquiry Form -->
                        <div class="enquiry">
                            <?php if(is_active_sidebar('enquiry-form') ):?>
                                <?php dynamic_sidebar('enquiry-form');?>
                            <?php endif;?> 
                        </div>
                    </div>
                </div><!-- END Content Column -->

            </div><!-- END First Row -->
            
        </div><!-- END container -->

    </div><!-- END page-wrap -->  
        
</div><!-- END main -->    

<?php
    get_footer();
?>