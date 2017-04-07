<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
  </head>  
  <body <?php echo body_class(); ?>>
    <div class="navbar-wrapper">
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded justify-content-between">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
          <a class="navbar-brand" href="/sos-animals"><?php bloginfo('name'); ?></a>
            <?php
              wp_nav_menu( array(
                'theme_location'  => 'header-menu',
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarNavDropdown',
                'menu_class'      => 'navbar-nav',
                'fallback_cb'     => '__return_false',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 2,
                'walker'          => new bootstrap_4_walker_nav_menu()
              ));
            ?> 
        </div> <!-- container -->
        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/" class="navbar-form">
          <div class="input-group">
              <input type="text" class="form-control"  value="<?php the_search_query(); ?>" name="s" id="s" />   
              <div class="input-group-btn">
                  <button class="btn btn-default" type="submit" id="searchsubmit" value="Search" /><i class="fa fa-search"></i></button>
              </div>
          </div>
        </form>
      </nav>    
    </div> <!-- navbar-wrapper -->
    <div class="header-img">
    </div><!-- .header-img -->
   
  





















    
      
  
    
