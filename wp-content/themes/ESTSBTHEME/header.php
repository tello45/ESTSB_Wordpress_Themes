<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
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
            <p style="font-size: 14px;color: #3e468f;text-align: left; margin-bottom: 0px; font-family: Poppins; " >
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
       <!-- Logo and info
                ============================================= -->           
      <div class="container clearfix">
            <div class="row pt-4 pb-1">
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
                
                </div><!-- #logo nd -->

                    <div class=" headinfo col pt-3">
                          <div class="headinfoicon ">
                            <i class="icon-envelope-open "></i>
                          </div>
                        <p style="    margin-bottom: 0px !important;  padding-left: 37px !important;   ">+212 523344449</p>
                        <p style="    margin-bottom: 0px !important; padding-left: 38px !important;  " class=" ">communication@ucd.ac.ma</p>       
                    </div>

                    <div class=" headinfo col pt-3">
                         <div class="headinfoicon ">
                          <i class="icon-map-marker-alt "></i>
                        </div>
                      <p style="    margin-bottom: 0px !important;  padding-left: 33px !important;   ">Avenue Jabran Khalil Jabran</p>
                      <p style="    margin-bottom: 0px !important; padding-left: 33px !important;  " class=" ">B.P 299-24000 El jadida</p>       
                    </div>

                    

             </div>

      </div><!-- #Logo and info end -->


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
                      ]);
                    }
                ?>
            </div>
        </nav><!-- #primary-menu end -->
        </div>        

            </header><!-- #header end -->
             <!--Grid row-->




