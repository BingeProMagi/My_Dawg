		<footer>
		    <div  class="container">
			    <div class="row">
			        <div class="col-md-12">	           
			            <ul class="list-inline">
			              <?php if ( is_active_sidebar( 'footer_area' ) ) : ?>
			                <?php dynamic_sidebar( 'footer_area' ); ?>
			              <?php endif; ?>
			            </ul><!-- /.list-inline -->
			        </div>
			    	<div class="col-md-12">
			    		<p>@2017 Markus Pantzar </p> 
			    	</div>
			    </div><!-- /.row -->
			</div><!-- /.container -->
		</footer>



	<?php wp_footer(); ?>
	</body>
</html>