<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//Ajoute une nouvelle zone de menu
function register_menu(){
    register_nav_menu('header-menu', __( 'Menu Header'));
}
add_action('init', 'register_menu');