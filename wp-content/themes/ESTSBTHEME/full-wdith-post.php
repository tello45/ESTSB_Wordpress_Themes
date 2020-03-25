<?php 
/* Template Name: Full Width Post
 * Template Post Type: Post
 */

get_header(); 
 ?>

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">
        
     

        <div class="container clearfix">

         
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

                            <!-- Entry Meta ============================================= -->
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
                                <div class="tagcloud clearfix bottommargin">
                              
                                </div> 

                                <div class="clear"></div>

                            </div>
                            </div>
                            <!-- .entry end -->

                            <!-- Post Navigation ============================================= -->
                            <div class="post-navigation clearfix">

                            <div class="col_half nobottommargin">
                        </div>

                        <div class="col_half col_last tright nobottommargin">
                            </div>

                            </div>
                            <!-- .post-navigation end -->


                          




                       
                                </div>
                                </div>
                            <?php
                            }}
                       ?>

             
                
   



        

    </div>

</section>
<!-- #content end -->

<?php get_footer(); ?>