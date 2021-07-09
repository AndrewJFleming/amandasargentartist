<?php
  function asws_customize_register($wp_customize){

    // SHOWCASE SECTION OPTIONS
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'amanda-sargent-site'),
      'description' => sprintf(__('Options for showcase','amanda-sargent-site')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'amanda-sargent-site'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));

  // MISC OPTIONS
  $wp_customize->add_section('misc', array(
    'title'   => __('Misc', 'amanda-sargent-site'),
    'description' => sprintf(__('Misc Customization Options','amanda-sargent-site')),
    'priority'    => 145
  ));
  
  // Customizer for Navbar Logo Text found in header.php
  $wp_customize->add_setting('logo_text', array(
    'default'   => _x('Amanda Sargent', 'amanda-sargent-site'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('logo_text', array(
    'label'   => __('Logo Text', 'amanda-sargent-site'),
    'section' => 'misc',
    'priority'  => 1
  ));

  // Customizer for heading on found on archive-paintings.php
  $wp_customize->add_setting('paintings_archive_heading', array(
    'default'   => _x('Portfolio', 'amanda-sargent-site'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('paintings_archive_heading', array(
    'label'   => __('Paintings Archive Heading', 'amanda-sargent-site'),
    'section' => 'misc',
    'priority'  => 2
  ));

  // Customizer for footer sections headings
  $wp_customize->add_setting('footer_left_heading', array(
    'default'   => _x('Quick Links', 'amanda-sargent-site'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('footer_left_heading', array(
    'label'   => __('Footer Left Heading', 'amanda-sargent-site'),
    'section' => 'misc',
    'priority'  => 3
  ));

  $wp_customize->add_setting('footer_right_heading', array(
    'default'   => _x('Follow me on', 'amanda-sargent-site'),
    'type'      => 'theme_mod'
  ));

  $wp_customize->add_control('footer_right_heading', array(
    'label'   => __('Footer Right Heading', 'amanda-sargent-site'),
    'section' => 'misc',
    'priority'  => 4
  ));
  
  }
  add_action('customize_register', 'asws_customize_register');