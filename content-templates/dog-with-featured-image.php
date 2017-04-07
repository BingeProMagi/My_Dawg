<article class="post with-feature-img">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php

				if ( has_post_thumbnail() ) {
					the_post_thumbnail('post_featured_image');
				}    
				?>
				<h1><?php the_title(); ?></h1>
				<h5 class"the-date"><?php the_date(); ?></h5>
				<?php
				the_content();
				?>	
			</div>
		</div>
	</div>			
</article>