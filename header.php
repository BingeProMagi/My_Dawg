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
    
  
  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><?php bloginfo('name'); ?></a>
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'header-menu',
          'container'     => false,
          'menu_class'    => 'nav navbar-nav',
          'fallback_cb'   => '__return_false',
          'items_wrap'    => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'       => 2,
          'walker'      => new bootstrap_4_walker_nav_menu()
        ) );
      ?>
    </nav>
      
  
    <div class="header-img">
      <span class="fa fa-apple fa-4x"></span>
    </div><!-- .header-img -->
    
    <!-- Carousel -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
       

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval= false>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
        <div class="col-md-4">
          
                <img class="d-block img " src="http://placehold.it/200x200" alt="First slide">
                  <ul class="text-center">
                    <li>Hary</li>
                    <li>Nice</li>
                    <li>Tall</li>
                  </ul>
          
        </div>
        <div class="col-md-4">
          
                <img class="d-block img " src="http://placehold.it/200x200" alt="First slide">
                  <ul class="text-center">
                    <li>Hary</li>
                    <li>Nice</li>
                    <li>Tall</li>
                  </ul>
        </div>
        <div class="col-md-4">
          
                <img class="d-block img " src="http://placehold.it/200x200" alt="First slide">
                  <ul class="text-center">
                    <li>Namn: Hary</li>
                    <li>Ålder: 2år</li>
                    <li>Storlek: 50cm</li>
                  </ul>
        </div>                                 
              </div>
              <div class="carousel-item">
        <div class="col-md-4">
          
                <img class="d-block img" src="http://placehold.it/200x200" alt="First slide">
                  <ul class="text-center">
                    <li>Hary</li>
                    <li>Nice</li>
                    <li>Tall</li>
                  </ul>
        </div>
        <div class="col-md-4">
          
                <img class="d-block img" src="http://placehold.it/200x200" alt="First slide">
                  <ul class="text-center">
                    <li>Hary</li>
                    <li>Nice</li>
                    <li>Tall</li>
                  </ul>
        </div>
        <div class="col-md-4">
          
                <img class="d-block img" src="http://placehold.it/200x200" alt="First slide">
                  <ul class="text-center">
                    <li>Hary</li>
                    <li>Nice</li>
                    <li>Tall</li>
                  </ul>
        </div>    
              </div>
              <div class="carousel-item">
        <div class="col-md-4">
          
                <img class="d-block img-fluid" src="http://placehold.it/200x200" alt="First slide">
                  <ul class="text-center">
                    <li>Hary</li>
                    <li>Nice</li>
                    <li>Tall</li>
                  </ul>
        </div>
        <div class="col-md-4">
          
                <img class="d-block img-fluid" src="http://placehold.it/200x200" alt="First slide">
                  <ul class="text-center">
                    <li>Hary</li>
                    <li>Nice</li>
                    <li>Tall</li>
                  </ul>
        </div>
        <div class="col-md-4">
          
                <img class="d-block img-fluid" src="http://placehold.it/200x200" alt="First slide">
                  <ul class="text-center">
                    <li>Hary</li>
                    <li>Nice</li>
                    <li>Tall</li>
                  </ul>
        </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="fa fa-angle-left fa-4x" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="fa fa-angle-right fa-4x" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


        </div><!-- col-md-12 -->
      </div><!-- row -->
    </div><!-- container-fluid -->

