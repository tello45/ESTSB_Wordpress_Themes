<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="content clearfix">

<div class="container">

	<div class="row justify-content-center ">

    <h2 class="pt-4"style=" margin: 0;  border-bottom: 4px solid #31A3DD; ">ACTUALITÉS</h2>

		<div class="MultiCarousel" data-items="1,2,3,3" data-slide="3" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
            
                          
            <div class="item">
                                        <div class="card text-center" >
                        <div class="card-body">
                            <h5 class="card-title text-white "> <i class="icon-time "></i> Last updated 3 mins ago</h5>
                            <p class="card-text f text-white ">Emplois du temps S2 & S4/ 2019-2020 pour les cours en ligne sur Microsoft Teams</p>
                            <a href="#" class="btn btn-light ">Lire la suite </a>
                        </div>
                        </div>
                </div>


                <div class="item">
                                        <div class="card text-center" >
                        <div class="card-body">
                            <h5 class="card-title text-white "> <i class="icon-time "></i> Last updated 3 mins ago</h5>
                            <p class="card-text f text-white ">Emplois du temps S2 & S4/ 2019-2020 pour les cours en ligne sur Microsoft Teams</p>
                            <a href="#" class="btn btn-light ">Lire la suite </a>
                        </div>
                        </div>
                </div>



                <div class="item">
                                        <div class="card text-center" >
                        <div class="card-body">
                            <h5 class="card-title text-white "> <i class="icon-time "></i> Last updated 3 mins ago</h5>
                            <p class="card-text f text-white ">Emplois du temps S2 & S4/ 2019-2020 pour les cours en ligne sur Microsoft Teams</p>
                            <a href="#" class="btn btn-light ">Lire la suite </a>
                        </div>
                        </div>
                </div>


                <div class="item">
                                        <div class="card text-center" >
                        <div class="card-body">
                            <h5 class="card-title text-white "> <i class="icon-time "></i> Last updated 3 mins ago</h5>
                            <p class="card-text f text-white ">Emplois du temps S2 & S4/ 2019-2020 pour les cours en ligne sur Microsoft Teams</p>
                            <a href="#" class="btn btn-light ">Lire la suite </a>
                        </div>
                        </div>
                </div>


                <div class="item">
                                        <div class="card text-center" >
                        <div class="card-body">
                            <h5 class="card-title text-white "> <i class="icon-time "></i> Last updated 3 mins ago</h5>
                            <p class="card-text f text-white ">Emplois du temps S2 & S4/ 2019-2020 pour les cours en ligne sur Microsoft Teams</p>
                            <a href="#" class="btn btn-light ">Lire la suite </a>
                        </div>
                        </div>
                </div>


                              
            



            </div>
           <i class="icon-long-arrow-alt-left leftLst"></i>
           <i class="icon-long-arrow-alt-right rightLst"></i>

        </div>
	</div>
	
</div>

<div class="content-wrap">

      
        

        <div class="container clearfix">

                <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

              <!-- Posts
              ============================================= -->
              <div class="row">


                <?php 
                if(have_posts(  )){
                  while (have_posts()) {
                    the_post(  );

                    // قادينا طمبيلت ديال بوسط وهو لكنخدمو بيه وفي حالة ملقات كيجيب 
                   get_template_part( '/partials/post/content','excerpt');

                  }
                }?>

              </div><!-- #posts end -->

              <!-- Pagination
              ============================================= -->

              
              <div class="row mb-3">
                  <div class="col-12">

                  <?php echo easy_wp_pagenavigation( ); ?>

                  </div>
                  
              </div>
              <!-- .pager end -->

          </div><!-- .postcontent end -->


            <?php get_sidebar(); ?>

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>