<footer>

    <div class="container">
        <div class="row">

            <!-- Left Footer -->
            <div class="col-sm-6 left-footer">
                <h3><?php echo get_theme_mod('footer_left_heading', 'Quick Links'); ?></h3>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class' => 'footer-nav'
                        )
                    );
                ?>
            </div>       
            <!-- END Left Footer -->

            <!-- Right Footer -->
            <div class="col-sm-6 right-footer">
                <h3><?php echo get_theme_mod('footer_right_heading', 'Follow me on'); ?></h3>
                <div id="social-media-footer">
                    <ul>
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'social-menu',
                                    'menu_class' => 'social-nav'
                                )
                            );
                        ?>
                    </ul>
                </div>

                <!-- Author from User Profile setting 'Display name publicly as' -->
                <div class="copyright">
                    <p>&copy; <?php echo Date('Y'); ?> - <?php the_author(); ?></p>
                </div>
                
            </div><!-- END Right Footer -->

        </div><!-- END row -->

    </div><!-- END container -->
    
</footer>

<?php wp_footer();?>
    
</body>
</html>