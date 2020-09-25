<?php 
// *************************************Les fonctions********************************
// *****************Titre et images****************
function ph_supports () {
    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support( 'title-tag' );
    // Ajouter la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );
}
// *****************Ajoute une nouvelle zone de menu**************
function register_menu(){
    register_nav_menu('header-menu', __( 'Menu Header'));
}

// *******************************************************Ajout du style*******************************************
function ph_register_assets () {
     // ******************* FONTS ***********************************
     wp_register_style('fonts', 'href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"');
     wp_enqueue_style( 'fonts' );
     // ********************* BOOTSTRAP ********************************
     //style
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    //js
    wp_register_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    //jquery
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
    // ******************MON STYLE.CSS ******************************
    wp_enqueue_style( 
        'photographe',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}

// ********************************ADD_ACTION******************************
//action qui ajoute le titre du site dans l'entête et la prise en charge des images en avant
add_action('after_setup_theme', 'ph_supports');
//Ajoute une zone de menu
add_action('init', 'register_menu');
// Ajout du style Bootstrap
add_action( 'wp_enqueue_scripts', 'ph_register_assets');
//ici envoi du shortcode


//Atelier de Manu sur les shortCodes et leur utilisation
// function shortcode_photographe($atts){
//     extract(shortcode_atts(
//         array(
//             'color'=> 'red'
//         ), $atts));
//     $html = "<h2 style=\"color:".$color."\">Wp atelier cool la life</h2>";
//     $html .= "<p>paragraphe</p>";
//     return $html;
// }
// .= signifie concaténation
// add_shortcode('photographe', 'shortcode_photographe');

