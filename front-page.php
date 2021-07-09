<?php get_header(); ?>

    <!-- Mobile Menu Overlay -->
    <div id="mobileOverlay"></div>

    <!-- Front-page Showcase -->
    <div class="showcase-container">
        <div class="showcase"></div>
    </div>

    <!-- main placed here in front-page.php instead of header.php
    Showcase full width of screen -->
    <div class="main">

        <div class="container">

                <!-- END From Misc Customizer -->
                <?php get_template_part('includes/section', 'content'); ?>

        </div>

    </div><!-- END main -->

<?php get_footer(); ?>