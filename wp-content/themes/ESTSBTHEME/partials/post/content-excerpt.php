<div class="entry clearfix">
              
              <?PHP 
            
                 if(has_post_thumbnail( )){
              ?>
                  <div class="entry-image">
                  <a href="#">
             <?PHP 
             
             the_post_thumbnail( 'larg', ['class'=> 'image_fade'] ) 
             ?>
                  </a>
                  </div>
            <?PHP
              }
            ?>
                  
                <div class="entry-title">
                  <h2>
                    <a href="<?PHP the_permalink(  )?>">
                <?PHP the_title(  )?>
                    </a>
                  </h2>
                </div>


                <ul class="entry-meta clearfix">

                  <li><i class="icon-calendar3"></i> <?php echo get_the_date( ); ?></li>
                 
                  <li>
                    <a href="<?PHP echo get_author_posts_url( get_the_author_meta( 'ID' ) )?>">
                      <i class="icon-user"></i>
                      <?PHP the_author( );?>

                    </a>
                  </li>

                  <li>
                    <i class="icon-folder-open"></i>
                    <?PHP the_category( ' ' ) ;?>

                  </li>

                  <li>
                    <a href="#">
                      <i class="icon-comments"></i>
                      <?PHP comments_number( '0');?>

                    </a>
                  </li>

                </ul>

                <div class="entry-content">
                  <p>
                  <?PHP the_excerpt(  )?>

                  </p>
                  <a href="<?PHP the_permalink(  )?>" class="more-link">Read More</a>
                </div>
              </div>




          

  