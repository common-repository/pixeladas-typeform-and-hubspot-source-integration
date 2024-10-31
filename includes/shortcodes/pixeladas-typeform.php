<?php
if (false === defined('ABSPATH')) exit;
$idtypeform    = $atts['id'];


function pixeladas_assets($id)
{
    /** TYPEFORM **/
    wp_enqueue_style('typeform-embed-style', 'https://embed.typeform.com/next/css/widget.css', array(), VERSION);
    wp_enqueue_script('typeform-embed-script', 'https://embed.typeform.com/next/embed.js', array(), VERSION);
    wp_enqueue_style('pixeladas-typeform', plugin_dir_url(__FILE__) . '../../public/css/pixeladas-typeform.css', array(), VERSION);
    
    wp_enqueue_script('pixeladas-typeform-script', plugin_dir_url(__FILE__) . '/pixeladas-typeform.js', array('jquery'), VERSION);
    // Pasa los parámetros al script JavaScript
    wp_localize_script( 'pixeladas-typeform-script', 'datos_js', array(
        'id' => $id,
    ) );
}
// add_action( 'wp_enqueue_scripts', 'pixeladas_assets');
pixeladas_assets($idtypeform);

?>

<div id="form"></div>