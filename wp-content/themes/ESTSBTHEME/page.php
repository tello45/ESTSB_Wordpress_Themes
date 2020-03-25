<?php get_header(); 


while(have_posts(  )){
    the_post(  )
    ?>
<!-- Page Title
============================================= -->
<section id="page-title">
    <div class="container clearfix">
    <h1><?php the_title() ?></h1>
    </div>
</section>
<!-- #page-title end -->
    <?php
}

rewind_posts(  );
?>



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

                              


                            <div class="line"></div>

                            <!-- Post Author Info
                            ============================================= -->
                             
                         

                  

             
                
             <!-- .postcontent end -->


            <?php get_sidebar(); ?>

        </div>

    </div>

</section>
<!-- #content end -->

<?php get_footer(); ?>