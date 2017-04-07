<?php get_header(); ?>

		<!-- Carousel -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval= false>
						<div class="carousel-inner" role="listbox">
							
							<?php $counter = 0;
							 $args = array(
					        'post_type' => 'post',
					        'posts_per_page' => 12,
					        'category_name' => 'Hund'
					    );
							$post_query = new WP_Query($args);
							if($post_query->have_posts() ) {
							  while($post_query->have_posts() && $counter < 9 ) {
							    $post_query->the_post();
							    ?>
									<?php if( $counter == 0) {?>						
									<div class="carousel-item active"><?php 
									}
									if($counter % 3 === 0 && (!$counter == 0) ){?>
									<div class="carousel-item"><?php 
									}$counter++;?>
						
									<div class="col-md-4">
									<h2 id='post-<?php the_ID(); ?>'>  
										<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
											<?php the_title(); ?></a></h2>									      
											
											<?php if ( has_post_thumbnail() ) {
												the_post_thumbnail();
											}?>

									</div>
									<?php 

									if($counter % 3 === 0 && !($counter == 0) ){?>
									</div><?php 
									}	
											
								}
							}else{
								e( 'Sorry, no posts matched your criteria.', 'textdomain' );
							}?>									
										
							<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
								<span class="fa fa-angle-left fa-4x" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
								<span class="fa fa-angle-right fa-4x" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
		  	</div><!-- col-md-12 -->
		  </div><!-- row -->
		</div><!-- container-fluid -->
		<!-- Carousel End -->
	</div>
	<div class="container">
		<div class="row ">
			<div class="col-md-12 help">
				<h1>Hjälp Våran Organisation</h1>
			</div>
		</div>
		<div class="row">	
			<div class="col-md-8 categories">
				<?php
				$args = array(
			        'post_type' => 'post',
			        'posts_per_page' => 4,
			        'category_name' => 'Organisation'
			    );
						$post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
						  while($post_query->have_posts() ) {
						    $post_query->the_post();
						    ?>
								<div class="col-md-6 organisation">
								<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
								<?php if ( has_post_thumbnail() ) {
												the_post_thumbnail();
								}?>
								<?php
									 the_excerpt();
								?></div><?php
							}
						}else{
							_e("Finns inget här...");
						}?>
			
			</div><!-- col-md-8 -->
			<div class="col-md-4">
				<h4>Facebook</h4>				
				<?php get_sidebar( $name= 'front'); ?>
			</div><!-- col-md-4 -->
		</div><!-- row -->	
	</div><!-- container -->

<?php get_footer(); ?>