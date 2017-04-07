<?php get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<?php
			if ( have_posts() ) { 
				while ( have_posts() ) {
					the_post();
					
					if(has_post_thumbnail()){
						get_template_part('content-templates/dog', 'with-featured-image' );
						
					}else{
						get_template_part('content-templates/dog', '' );
					}

				}
			} 

			else {
				_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
			}
			?>
		
		</div> <!-- col-md-12 -->		
	</div> <!-- row -->
</div> <!-- container -->

<?php get_footer(); ?>