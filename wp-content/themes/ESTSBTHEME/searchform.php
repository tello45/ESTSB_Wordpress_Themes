<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>




<form method="get" role="search"   action="<?php echo esc_url( home_url( '/' ) ); ?>"  id="search-box" class="col-md-6 "> 
                <i class="fa fa-globe"></i>
                <input type="search" placeholder="..." id="<?php echo $unique_id; ?> 
                
                value="<?php the_search_query(); ?>"
               placeholder="<?php _e( 'Search', 'estsb' ); ?>"
               />
                 <span class="inline-search">
                 <button id="search-btn" type="submit"  ><i class="fa fa-search"></i></button>
                </span>
                </form>