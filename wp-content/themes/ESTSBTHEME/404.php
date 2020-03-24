<?php get_header(); ?>

<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1>Page Not Found</h1>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="col_half nobottommargin">
                <div class="error404 center">404</div>
            </div>

            <div class="col_half nobottommargin col_last">

                <div class="heading-block nobottomborder">
                    <h4>Ooopps! The Page you were looking for, couldn't be found.</h4>
                    <span>Try searching for the best match or browse the links below:</span>
                </div>

            <?php get_search_form(  )?>

            </div>

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>









<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <!-- Stylesheets
	============================================= -->
    <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Document Title
	============================================= -->

</head>

<body  <?php body_class( 'stretched no-transition' ); ?> >

  <!-- Document Wrapper
  ============================================= -->
  <div id="wrapper" class="clearfix">
    <!-- Top Bar
    ============================================= -->
    <div id="top-bar" >

      <div class="container clearfix">

        <div class="col_half nobottommargin">

          <!-- Top Links
          ============================================= -->
          <div class="top-links">
            <p style="font-size: 14px;color: #acaeb1;text-align: left; margin-bottom: 0px; " > 
            Avenue des Facultés, El Jadida 24000 </p >
          </div><!-- .top-links end -->

        </div>

        <div class="col_half fright col_last nobottommargin">
          <!-- Top Social
          ============================================= -->
          <div id="top-social">
            <ul>
              <?php

                  if( get_theme_mod( 'ju_facebook_handle' ) ){
                      ?><li><a href="https://facebook.com/<?php echo get_theme_mod( 'ju_facebook_handle' ); ?>" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li><?php
                  }

                  if( get_theme_mod( 'ju_twitter_handle' ) ){
                      ?> <li><a href="https://twitter.com/<?php echo get_theme_mod( 'ju_twitter_handle' ); ?>" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li><?php
                  }

                  if( get_theme_mod( 'ju_instagram_handle' ) ){
                      ?><li><a href="https://instagram.com/<?php echo get_theme_mod( 'ju_instagram_handle' ); ?>" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li><?php
                  }

                  if( get_theme_mod( 'ju_email' ) ){
                      ?><li><a href="mailto:<?php echo get_theme_mod( 'ju_email' ); ?>" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><?php echo get_theme_mod( 'ju_email' ); ?></span></a></li><?php
                  }

                  if( get_theme_mod( 'ju_phone_number' ) ){
                      ?><li><a href="tel:+<?php echo get_theme_mod( 'ju_phone_number' ); ?>" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+<?php echo get_theme_mod( 'ju_phone_number' ); ?></span></a></li><?php
                  }

                ?>
            </ul>
          </div><!-- #top-social end -->

        </div>

      </div>

    </div><!-- Top Bar -->

    <!-- Header
    ============================================= -->
    <header id="header pt-5" ">

      <div class="container clearfix">
            <div class="row pt-4 pb-4">
                <!-- Logo
                ============================================= -->
                <div id="logo"  class="col-4 ">

                  <?php 
                  if(has_custom_logo(  )){
                    the_custom_logo(  );  
                  }else {
                      ?>
                      <a href="<?php echo home_url( '/' ); ?>" class="standard-logo"><?php bloginfo( 'name' ); ?></a>
                      <?php
                  }
                  ?>
                
                </div><!-- #logo end -->
                <!-- info head
                ============================================= -->
                <div class=" headinfo col pt-3">
      
                      <div class="headinfoicon ">
                        <i class="icon-map-marker-alt "></i>
                      </div>
                    <p style="    margin-bottom: 0px !important;  padding-left: 33px !important;   ">123 456 789</p>
                    <p style="    margin-bottom: 0px !important; padding-left: 33px !important;  " class=" ">info@example.com</p>       
                </div>
                <div class=" headinfo col pt-3">
      
                      <div class="headinfoicon ">
                        <i class="icon-map-marker-alt "></i>
                      </div>
                    <p style="    margin-bottom: 0px !important;  padding-left: 33px !important;   ">123 456 789</p>
                    <p style="    margin-bottom: 0px !important; padding-left: 33px !important;  " class=" ">info@example.com</p>       
                </div>
                <div class=" headinfo col pt-3">
      
                      <div class="headinfoicon ">
                        <i class="icon-map-marker-alt "></i>
                      </div>
                    <p style="    margin-bottom: 0px !important;  padding-left: 33px !important;   ">123 456 789</p>
                    <p style="    margin-bottom: 0px !important; padding-left: 33px !important;  " class=" ">info@example.com</p>       
                </div>
                
                
                <!-- info head -->
            </div>


      <div id="header-wrap ">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2">

          <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- ul Main Menu
            ======================================== -->
            
            <?php
            
                if(has_nav_menu( 'primary' )){
                  wp_nav_menu([
                    'theme_location'        =>  'primary',
                    'container'       => false,
                    'fallback_cb'      =>  false,
                    'depth'         =>4 ,
                  //  'walker'        => new ju_custom_nav_walker()
                  ]);
                }
             ?>

            <?php  if(get_theme_mod( 'ju_header_show_cart' )){
             
                ?>      

                <!-- Top Cart
                ============================================= -->
                <div id="top-cart">
                  <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                  <div class="top-cart-content">
                    <div class="top-cart-title">
                      <h4>Shopping Cart</h4>
                    </div>
                    <div class="top-cart-items">
                      <div class="top-cart-item clearfix">
                        <div class="top-cart-item-image">
                          <a href="#"><img src="images/shop/small/1.jpg" /></a>
                        </div>
                        <div class="top-cart-item-desc">
                          <a href="#">Blue Round-Neck Tshirt</a>
                          <span class="top-cart-item-price">$19.99</span>
                          <span class="top-cart-item-quantity">x 2</span>
                        </div>
                      </div>
                      <div class="top-cart-item clearfix">
                        <div class="top-cart-item-image">
                          <a href="#"><img src="images/shop/small/6.jpg" /></a>
                        </div>
                        <div class="top-cart-item-desc">
                          <a href="#">Light Blue Denim Dress</a>
                          <span class="top-cart-item-price">$24.99</span>
                          <span class="top-cart-item-quantity">x 3</span>
                        </div>
                      </div>
                    </div>
                    <div class="top-cart-action clearfix">
                      <span class="fleft top-checkout-price">$114.95</span>
                      <button class="button button-3d button-small nomargin fright">
                        View Cart
                      </button>
                    </div>
                  </div>
                </div><!-- #top-cart end -->

                <?php
                }
            ?>

                <!-- Top Search
                ============================================= -->
                <?php 
            if(get_theme_mod( 'ju_header_show_search' )){
              ?>
                <div id="top-search">
                  <a href="#" id="top-search-trigger">
                    <i class="icon-search3"></i><i class="icon-line-cross"></i>
                  </a>
                  <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                    <input type="text" name="q" class="form-control" placeholder="Type &amp; Hit Enter.." value="<?php the_search_query(); ?>">
                  </form>
                </div><!-- #top-search end -->
                <?php
                }
            ?>
           

        

          </div>

        </nav><!-- #primary-menu end -->


            </header><!-- #header end -->
        <!--Grid row-->




<div class="container clearfix">
            <div class="row pt-4 pb-1">
                <!-- Logo
                ============================================= -->
                

   <!--Grid column-->
   <div class="col">

            <!-- Card -->
            <div class="card gradient-card">

            <div class="card-image" >

                  <!-- Content -->
                  <a href="#!">
                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                      <div class="first-content align-self-center p-3">
                        <h3 class="card-title text-white ">Filière GI   </h3>
                        <p class="lead mb-0">Génie Informatique </p>
                      </div>
                      <div class="second-content align-self-center mx-auto text-center">
                        <i class="far fa-money-bill-alt fa-3x"></i>
                      </div>
                    </div>
                  </a>

                </div>

              


            </div>
            <!-- Card -->

</div>
<!--Grid column-->


   <!--Grid column-->
   <div class="col">

            <!-- Card -->
            <div class="card gradient-card">

            <div class="card-image" >

                  <!-- Content -->
                  <a href="#!">
                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                      <div class="first-content align-self-center p-3">
                        <h3 class="card-title text-white">Filière TM</h3>
                        <p class="lead mb-0">Techniques de Management</p>
                      </div>
                      <div class="second-content align-self-center mx-auto text-center">
                        <i class="far fa-money-bill-alt fa-3x"></i>
                      </div>
                    </div>
                  </a>

                </div>

              


            </div>
            <!-- Card -->

</div>
<!--Grid column-->


   <!--Grid column-->
   <div class="col">

            <!-- Card -->
            <div class="card gradient-card">

            <div class="card-image" >

                  <!-- Content -->
                  <a href="#!">
                    <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                      <div class="first-content align-self-center p-3">
                        <h3 class="card-title text-white">Filière GA</h3>
                        <p class="lead mb-0"> génie agroalimentaire </p>
                      </div>
                      <div class="second-content align-self-center mx-auto text-center">
                        <i class="far fa-money-bill-alt fa-3x"></i>
                      </div>
                    </div>
                  </a>

                </div>

              


            </div>
            <!-- Card -->

</div>
<!--Grid column-->
  
  
</div>


          

      </div>


