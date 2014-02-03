<?php
add_filter('comments_template', 'legacy_comments');

function legacy_comments($file) {

	if(!function_exists('wp_list_comments')) : // WP 3.6-only check
		$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;

	return $file;
}

if ( function_exists('register_sidebars') )
	register_sidebars(3,array(
		'before_widget' => '<li>',
		'after_widget' => '</li>', 
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
?>