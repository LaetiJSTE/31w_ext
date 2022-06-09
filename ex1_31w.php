<?php
/**
 * Plugin Name: Extension de l'exercice #1
 * Author: Laetitia Juste
 * Description: Une nouvelle extension pour l'exercice 1
 *Author URI: https://github.com/LaetiJSTE
 */
?>
<?php 

function fonction_generalle() {
    function mon_31w_enqueue() {
        wp_enqueue_style(	'mon_31w-style', 
                            get_stylesheet_uri(), 
                            array(),
                            filemtime(get_template_directory() . '/style.css'));
    }
    add_action( 'wp_enqueue_scripts', 'mon_31w_enqueue' );
}

add_action('init', "fonction_generalle");


?>