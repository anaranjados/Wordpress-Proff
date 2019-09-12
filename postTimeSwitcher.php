<?php
/**
 * Plugin Name: Выключатель даты публикации WP
 * Description: Активировав это, вы сможете спрятать дату публикаций в рамках любой темы Wordpress
 * Author URI:	https://github.com/cpu-fighter/
 * Author: 		Ale Proenza
 * Version:     0.1
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Network:     true
 */
function postTime_toggle()
{
    wp_register_script( 'custom-script', plugins_url( 'toggle_time.js', __FILE__ ) );
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'postTime_toggle' );

?>
