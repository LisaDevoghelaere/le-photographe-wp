<?php
    /*
    Plugin Name: ACS
    Description: Test Short Code
    Author: ACS
    Version: 1.0.0
    */

    // Comment créer un plugin atelier avec Manu
    function shortcode_acs($atts){
        extract(shortcode_atts(
            array(
                'color'=> 'red'
            ), $atts));
        $html = "<h2 style=\"color:".$color."\">Wp atelier cool la life</h2>";
        $html .= "<p>paragraphe</p>";
        return $html;
    }// .= signifie concaténation
add_shortcode('acs_message', 'shortcode_acs');
