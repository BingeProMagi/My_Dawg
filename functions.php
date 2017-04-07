<?php









function add_styles_and_scripts() {

wp_enqueue_style( 'themes-bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css', '4.0.0-alpha.6' );

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

