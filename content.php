

<h1><?php the_title(); ?></h1>
<?php

if ( has_post_thumbnail() ) {
	the_post_thumbnail('post_featured_image');
}    
?>

<?php
the_content();
?>	
	