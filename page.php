<?php get_header(); ?>
		
	<?php 
	if( have_posts() ){
		while( have_posts() ){
			the_post();

			get_template_part('content-templates/page', '' );

		}
	}else{
		_e('Sorry, no posts matched your criteria.', 'my_dawg');
	}?>

<?php get_footer(); ?>