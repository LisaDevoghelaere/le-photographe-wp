<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      
      <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <div class="container">
    <header class="header">
        <nav class="navbar navbar-light bg-light">
          <div>
            <a href="<?php echo home_url( '/' ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/photographe_logo.png" alt="Logo" class="logo">
            </a>  
            <h1>Le Photographe</h1> 
          </div>
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
        </nav>
        <div class="hero">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/header1.jpg" alt="image du header">
        </div>

      </header>
      <?php wp_body_open(); ?>