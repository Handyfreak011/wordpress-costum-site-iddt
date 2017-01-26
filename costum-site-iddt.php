<?php
/**
* Plugin Name: Costum Site
* Description: Costum Wordpress Site/Post type
* Author: Sebastian Schaefer
* Version: 0.0.1
* License: GLPv2
*/

//Exit if accessed directly (security)
if( !defined('ABSPATH')){
  exit;
}

function iddt_register_site_post_type(){

  $singular = 'Produktart';
  $plural = 'Produktarten';

  $labels = array(
    'name'               => $plural,
    'singular_name'      => $singular,
    'add_new'            => 'Neue hinzufügen',
    'add_new_item'       => 'Neue '. $singular. ' hinzufügen',
    'edit'               => 'Bearbeiten',
    'edit_item'          => 'Bearbeite die ' . $singular,
    'new_item'           => 'Neue ' . $singular,
    'view'               => 'Sieh dir die ' . $singular . ' an',
    'view_item'          => 'Sieh dir die ' . $singular . ' an',
    'parent'             => 'Parent ' . $singular,
    'not_found'          => 'Keine '. $plural . ' gefunden',
    'not_found_in_trash' => 'Keine '. $plural . 'im Papierkorb gefunden'
  );

  $args = array(
    'public' => true,
    'labels' => $labels
  );
  register_post_type('Bessere Seite', $args);
}

add_action('init', 'iddt_register_site_post_type');

?>
