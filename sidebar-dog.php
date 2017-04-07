<div class="sidebar-dog">
	<div  class="container">
        <div class="row">
		    <ul class="list-inline">
		        <?php if ( is_active_sidebar( 'sidebar-dog' ) ) : ?>
		            <?php dynamic_sidebar( 'sidebar-dog' ); ?>
		        <?php endif; ?>
		    </ul><!-- /.list-inline -->
		</div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- sidebar-dog -->
