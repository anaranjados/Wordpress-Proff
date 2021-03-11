<?php
/**
 * Plugin Name: Выключатель даты публикации поста WP
 * Description: Активировав, вы сможете спрятать дату публикаций в рамках любой темы Wordpress
 * Author URI:	https://github.com/anaranjados/
 * Author: 		Alejandro Proenza
 * Version:     0.1
 * Network:     true
 */
function postTime_toggle()
{
    wp_register_script( 'custom-script', plugins_url( 'toggle_time.js', __FILE__ ) );
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'postTime_toggle' );

?>
