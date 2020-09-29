<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
      <meta name="description" content="Site de Photographe, ses services, ses actualités et une gallerie d'image">
      
      <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <div class="container-fluid">
    <header class="header">
        <div class="upperbar container-fluid">
          <nav class="barnav container">
            <div>
              <a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/photographe_logo.png" alt="Logo" class="logo">
              </a>  
              <p class="nom-site"><a href="<?php the_permalink() ?>"><?php echo get_bloginfo( 'name' ); ?></a></p> 
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
          
          </div>
          </nav>
      </header>
      <?php wp_body_open(); ?>