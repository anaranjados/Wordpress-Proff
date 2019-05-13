<?php

// Allow Editor, Author roles manage Themes
	get_role('editor') -> add_cap('edit_theme_options');
	get_role('author') -> add_cap('edit_theme_options');

// Page locations
add_action('after_setup_theme', function() {
	register_nav_menus([
		'cities-loc' => 'Города',
		'left-footer' => 'Подножие слева',
		'right-footer' => 'Подножие справа',
	]);

}); ?>
