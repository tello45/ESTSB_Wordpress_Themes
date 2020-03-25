<?php 
/*
 * Template Name: Full Width Page
 */

get_header(); 

?>
<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
        <h1><?php single_post_title(); ?></h1>
        <span>
            <?php 
            
            if( function_exists( 'the_subtitle' ) ){
                the_subtitle(); 
            }
            
            ?>
        </span>
    </div>
</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <!-- Post Content
            ============================================= -->
          
                <?php

                while( have_posts() ){
                    the_post();

                    global $post;
                    $author_ID          =   $post->post_author;
                    $author_URL         =   get_author_posts_url( $author_ID );

                    ?>
                    <div class="single-post nobottommargin">

                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">

                        
                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content notopmargin">

                                <?php 
                                
                                the_content(); 

                                $defaults = array(
                                    'before'           => '<p class="text-center">' . __( 'Pages:', 'udemy' ),
                                    'after'            => '</p>',
                                );

                                wp_link_pages( $defaults );
                                
                                ?>
                                <!-- Post Single - Content End -->

                                <div class="clear"></div>

                            </div>
                        </div><!-- .entry end -->

                        <div class="line"></div>

                    
                    </div>
                    <?php
                }

                ?>
        </div>

    </div>

</section><!-- #content end -->

<?php get_footer(); ?>