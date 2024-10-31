<?php
/*
Plugin Name: Pixeladas Typeform and Hubspot source integration
Plugin URI: https://www.pixeladas.es
Description: Plugin que permite que Hubspot haga seguimiento del source en formularios embebidos en tu web
Version: 1.3
Author: PIXELADAS  
Author URI: https://www.pixeladas.es
License: GPL2
Text Domain:  pixeladas-typeform-hubspot
*/


if (!defined('ABSPATH')) exit;
if (!defined('WPINC')) exit;

function sc_pixeladas_typeform($atts)
{
  $plugin_data = get_plugin_data(__FILE__);
  $version = $plugin_data['Version'];
  // Definimos variable global para que puedan consumir el resto de plugins.
  define('VERSION', $version);
  
  $p = shortcode_atts(
    array(
      'id' => ''
    ),
    $atts
  );

  ob_start();
  require_once('includes/shortcodes/pixeladas-typeform.php');
  return ob_get_clean();
}
add_shortcode('pixeladas_typeform', 'sc_pixeladas_typeform');
