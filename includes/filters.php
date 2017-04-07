<?php 

function my_dawg_custom_excerpt_lenght( $length ) {
    return 10;
}

add_filter( 'excerpt_length', 'my_dawg_custom_excerpt_lenght');

function my_dawg_excerpt_more( $more ) {
	return sprintf('<br /><a class="read-more btn btn-primary"href="%1$s">%2$s</a>',
	get_permalink( get_the_ID() ),
	__('Read More', 'my_dawg')
	);
}

add_filter( 'excerpt_more', 'my_dawg_excerpt_more');