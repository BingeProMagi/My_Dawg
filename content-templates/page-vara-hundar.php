<?php get_header(); 
/*
Template Name: Vara Hundar
*/
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 marine-blue">
			<h2>Våra Hundar</h2>
		</div>
	</div>
			
	<div class="row">	
		<div class="col-md-9 categories">	
			<h2>Stora</h2>
			<!-- Loopar in stora hundar -->
			<?php
	    $args = array(
	        'post_type' => 'post',
	        'posts_per_page' => 3,
	        'category_name' => 'Stor'
	    );
				$post_query = new WP_Query($args);
				if($post_query->have_posts() ) {
				  while($post_query->have_posts() ) {
				    $post_query->the_post();
				    ?>
						<div class="col-md-3 stora">
						<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						<?php
							 if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}
						?></div><?php
					}
				}else{
					_e("Finns inget här...");
				}?>

		</div><!-- col-md-9 -->

		<div class="col-md-3 hidden-xs-down hidden-sm">			
			<?php get_sidebar($name = 'dog'); ?>
		</div><!-- col-md-3 -->
	
		<div class="col-md-9 categories">	
			<h2>Medel</h2>
			<!-- Loopar in medel hundar -->
			<?php
			    $args = array(
			        'post_type' => 'post',
			        'posts_per_page' => 3,
			        'category_name' => 'Medel'
			    );
						$post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
						  while($post_query->have_posts() ) {
						    $post_query->the_post();
						    ?>
								<div class="col-md-3 intermediate">
								<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
								<?php
									 if ( has_post_thumbnail() ) {
										the_post_thumbnail();
									}
								?></div><?php
								} 
							}else{
								_e("Finns inget här...");
			}?>
		</div><!-- col-md-9 -->
	
		<div class="col-md-9 categories">
			<h2>Små</h4>
			<!-- Loopar in små hundar -->
			<?php
	    $args = array(
	        'post_type' => 'post',
	        'posts_per_page' => 3,
	        'category_name' => 'Små' // <-- Skulle döpt denna till något bättre
	    );
				$post_query = new WP_Query($args);
				if($post_query->have_posts() ) {
				  while($post_query->have_posts() ) {
				    $post_query->the_post();
				    ?>
						<div class="col-md-3 small">
						<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						<?php
							 if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							}
						?></div><?php
					}
				}else{
					_e("Finns inget här...");
				}?>
		</div><!-- col-md-9 -->		
	</div> <!-- row -->
</div><!-- container -->


<?php get_footer(); ?>
