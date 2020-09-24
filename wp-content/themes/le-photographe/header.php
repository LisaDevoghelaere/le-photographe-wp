<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">

    <div class="barnav">
      <a href="<?php echo home_url( '/' ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/photographe_logo.png" alt="Logo">
      </a>  
      <h1>Le Photographe</h1> 
      <?php 
    if( has_nav_menu('header-menu')){
      wp_nav_menu(
        array(
        'theme_location' => 'header-menu',
        'menu_class' => 'navbar'
        )
      );
    }
    ?>
    </div>
    <div class="hero">
      <img src="" alt="La photo du hero">
    </div>

  </header>
    <?php wp_body_open(); ?>