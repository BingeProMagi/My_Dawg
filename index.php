
<?php get_header(); 
	if(x))
?>

<div class="container">
	
	<div class="row">
		<div class="col-md-8">
			<?php
			if (have_posts()) :
				while (have_posts()) :
			    the_post();
			    ?>
			    	<h2 id='post-<?php the_ID(); ?>'>  
			    	<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
						<?php the_title(); ?></a></h2>
			    <?php
			    the_content();
			  endwhile;
				  else :
					_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
			endif;		
			?>
		</div><!-- col-md-8 -->
		<div class="col-md-4">
			
			<?php get_sidebar(); ?>


		</div><!-- col-md-4 -->
	</div><!-- row -->	
</div><!-- container -->



<?php get_footer(); ?>












