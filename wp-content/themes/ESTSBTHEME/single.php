<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">
        
     

        <div class="container clearfix">

                <!-- Post Content
          ============================================= -->
          <div class="postcontent nobottommargin clearfix">

          <?php if(have_posts(  )){
              while(have_posts(  )){
                  the_post(  );
                  global $post ;
                  $author_ID = $post->post_author ;
                  $author_URL = get_author_posts_url( $author_ID );

                  ?>
                        <div class="single-post nobottommargin">

                            <!-- Single Post-->
                                        
                        <div class="entry clearfix">

                            <!-- Entry Title -->
                      
                                <div class="entry-title">
                                    <h2> <?php the_title( );?> </h2>
                                </div>

                            <!-- .entry-title end -->
                            <div class="line"></div>

                        

                            <!-- Entry Content ============================================= -->
                            <div class="entry-content notopmargin">

                            <?PHP 
                                    
                                    the_content(   );
                                    $defaults = array(
                                        'before'           => '<p Class="text-center">' . __( 'Pages:', 'ESTTHEME' ),
                                        'after'            => '</p>',
                                       
                                    );
                                 
                                        wp_link_pages( $defaults );
                                ?>

                                <!-- Tag Cloud
                                                ============================================= -->
                               

                           

                            </div>
                            </div>
                            <!-- .entry end -->

                            <!-- Post Navigation ============================================= -->
                            <div class="post-navigation clearfix">

                            <div class="col_half nobottommargin">
                            <?PHP  previous_post_link() ?> 
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            <?PHP  next_post_link() ?> 
                            </div>

                            </div>
                            <!-- .post-navigation end -->

                         
                           
                            <!-- Post Single - Author End -->

                            </div>
                                </div>
                            <?php
                            }}
                       ?>


             
                
     <!-- .postcontent end -->


            <?php get_sidebar(); ?>

        </div>

    </div>

</section>
<!-- #content end -->

<?php get_footer(); ?>