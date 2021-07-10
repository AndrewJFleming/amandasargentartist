<?php if( have_posts() ): while( have_posts() ): the_post();?>
    
    <?php the_content();?>
 
    <!-- Display Custom Fields -->
    <?php if ( function_exists('get_field_objects')): ?>

    <?php $fields = get_field_objects();?>
        <?php if( $fields ): ?>

            <ul class="details list-group list-group-flush">
                <?php foreach( $fields as $field ): ?>
                    
                    <?php if( $field['value'] ): ?>
                        <li class="list-group-item">
                            <strong><?php echo $field['label']; ?>:</strong> <?php echo $field['value']; ?>
                        </li>
                    <?php endif; ?>

                <?php endforeach; ?>
            </ul>

        <?php endif; ?>
    <?php endif; ?>

<?php endwhile; else: endif;?>