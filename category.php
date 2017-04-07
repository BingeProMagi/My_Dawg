<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				?>

				 	<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>

				<?php      
				 	
				 	if ( has_post_thumbnail() ) {
				    the_post_thumbnail();
					}
				?>

					<?php the_excerpt(); ?>
				 
				<?php
				    endwhile;
				    else :
				        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
				    endif;
			?>


							


		</div><!-- col-md-12 -->		
	</div> <!-- row -->
</div><!-- container -->

<?php get_footer(); ?>