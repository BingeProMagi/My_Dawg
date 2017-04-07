

<h1><?php the_title(); ?></h1>
<?php

if ( has_post_thumbnail() ) {
	the_post_thumbnail('post_featured_image');
}    
?>

<h5 class"the-date"><?php the_date(); ?></h5>
<?php
the_content();
?>	
	