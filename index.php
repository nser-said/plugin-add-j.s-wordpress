<?php

/**
 *   Plugin Name:    plugin add j.s wordpress
 *  Description:     add faile js
 *  Author:          NASER SAID
 */


 add_action('wp_footer', 'Nea_add_custom_js' );

 function  Nea_add_custom_js(){
    $js_url=esc_url( plugins_url( 'js/main.js', __FILE__ ));

    echo "<script src='{$js_url}'></script>";
 }