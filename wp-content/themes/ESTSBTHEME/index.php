<?php get_header(); ?>

<!-- Content
============================================= -->

<div class="container clearfix">
            <div class="row pt-4 pb-1">
                <!-- Logo
                ============================================= -->
                

   <!--Grid column-->
   <div class="col">

            <!-- Card -->
            <div class="card ">
                  <!-- Content -->
                  <a href="#!">

                    <div class="text-white d-flex h-100 mask "  style="
                    background: #4d58b1;
                    background: -webkit-linear-gradient(left, #4d58b1, #5062d9);
                    border-radius: 0.25rem;
                    ">
                      <div class="first-content align-self-center p-3">
                        <h3 class="card-title text-white ">Filière GI   </h3>
                        <p class="lead mb-0">Génie Informatique </p>
                      </div>
                     
                    </div>

                  </a>


            </div>
            <!-- Card -->

</div>
<!--Grid column-->


   <!--Grid column-->
   <div class="col">

            <!-- Card -->
            <div class="card ">
                  <!-- Content -->
                  <a href="#!">

                    <div class="text-white d-flex h-100 mask "  style="
                    background: #4d58b1;
                    background: -webkit-linear-gradient(left, #4d58b1, #5062d9);
                    border-radius: 0.25rem;
                    ">
                      <div class="first-content align-self-center p-3">
                        <h3 class="card-title text-white ">Filière TM    </h3>
                        <p class="lead mb-0">Techniques de Management </p>
                      </div>
                     
                    </div>

                  </a>


            </div>
            <!-- Card -->

</div>
<!--Grid column-->


   <!--Grid column-->
   <div class="col">

            <!-- Card -->
            <div class="card ">
                  <!-- Content -->
                  <a href="#!">

                    <div class="text-white d-flex h-100 mask "  style="
                    background: #4d58b1;
                    background: -webkit-linear-gradient(left, #4d58b1, #5062d9);
                    border-radius: 0.25rem;
                    ">
                      <div class="first-content align-self-center p-3">
                        <h3 class="card-title text-white ">Filière GA   </h3>
                        <p class="lead mb-0">Génie Agroalimentaire  </p>
                      </div>
                     
                    </div>

                  </a>


            </div>
            <!-- Card -->

</div>
<!--Grid column-->





  
  
</div>





<section id="content clearfix">

<div class="alert alert-primary" role="alert">
<span class="badge badge-warning">New</span>  Emplois du temps S2 & S4/ 2019-2020 pour les cours en ligne sur Microsoft Teams
</div>

<div class="content-wrap">

    <div class="container clearfix">
        
                        <!-- Post Content
                  ============================================= -->
                  <div class="postcontent nobottommargin clearfix">

             <!-- slider ACTUALITÉS 
                  ============================================= -->
            
                  <div class="row">
            <div class="card mb-4 "  style="width: 100%;" >
  <div class="card-header ">
  <h2 class=""style=" margin: 0; FONT-SIZE: 1.4rem;
    font-weight: 500;   ">ACTUALITÉS</h2>
  </div>
  <div class="card-body">

  
                          <div class="row justify-content-center ">
  
  
                              <div class="MultiCarousel" data-items="1,1,1,2" data-slide="2" id="MultiCarousel"  data-interval="1000">
                                  <div class="MultiCarousel-inner">
                                  
                                  
  
                                  <?php 
                if(have_posts(  )){
                  while (have_posts()) {
                    the_post(  );

                    // قادينا طمبيلت ديال بوسط وهو لكنخدمو بيه وفي حالة ملقات كيجيب 
                   get_template_part( '/partials/post/ACTUALITe','post');

                  }
                }?>    
                                  
  
  
  
                                  </div>
                              <i class="icon-long-arrow-alt-left leftLst"></i>
                              <i class="icon-long-arrow-alt-right rightLst"></i>
  
                              </div>
                          </div>
                          
                          </div>
</div>
</div>      
        


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
    </div>

</section><!-- #content end -->

<?php get_footer(); ?>