<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
 
  <?php wp_head();?>
  <style>
    .showcase {
        background: url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').''); ?>);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
  </style>
</head>
 
<body>
  
  <!-- Navbar -->
  <header class="custom-navbar">
    <div class="header-wrapper">
      
      <div id="menu-icon">
        <i class="fa fa-bars"></i>
      </div>
      <div id="logo">
        <a href="<?php echo get_site_url(); ?>"><p><?php echo get_theme_mod('logo_text', 'Amanda Sargent'); ?><p></a>
      </div>

      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar'
          )
        );
      ?>

    </div>
  </header>

  <!-- Mobile Menu -->
  <div id="slideout-menu">
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'menu_class' => 'top-bar'
        )
      );
    ?>
  </div>
  
  <!-- Main wrap begins here for all templates except front-page.php
  Main wrap begins after showcase in front-page.php -->
  <?php if(!is_front_page()) { ?>
    <div id="mobileOverlay"></div>
    <div class="main">
  <?php } ?>