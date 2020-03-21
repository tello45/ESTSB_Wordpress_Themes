<?php get_header(); ?>

<section id="page-title">

<div class="container clearfix">
  <h1> <?php the_archive_title(  ) ?>  </h1>
  <span> <?php the_archive_description(  ) ?></span>
</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
            <div>
                <div class="container clearfix">
                    <span class="badge badge-danger bnews-title">Breaking News:</span>

                    <div class="fslider bnews-slider nobottommargin" data-speed="800"
                            data-pause="6000" data-arrows="false" data-pagi="false">
                        <div class="flexslider">
                            <div class="slider-wrap">
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                                <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="container clearfix">

                <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

              <!-- Posts
              ============================================= -->
              <div id="posts">


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


                  <?php next_posts_link( " &larr; Older" )?>
                    <?php previous_posts_link( ' Newer &rarr;' )?>
                    <!-- .pager end 
                    <a href="#" class="btn btn-outline-secondary float-left">
                    
                    </a>
                    <a href="#" class="btn btn-outline-dark float-right">
                    
                    </a>-->
                  </div>
                  
              </div>
              <!-- .pager end -->

              </div><!-- .postcontent end -->


            <?php get_sidebar(); ?>

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>