<sidebar>
    <div  class="container">
        <div class="row">
            <ul class="list-inline">
                <?php if ( is_active_sidebar( 'sidebar-front' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar-front' ); ?>
                <?php endif; ?>
            </ul><!-- /.list-inline -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</sidebar>