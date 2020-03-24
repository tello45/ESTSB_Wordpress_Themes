<?php 


function ju_widgets(){

    register_sidebar( [
        'name'          => __( 'Main Sidebar', 'ESTSB' ),
        'id'            => 'ju_sidebar',
        'description'   => __( 'THIS FOR ESTSB THEME .', 'ESTSB' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widtitle"  >',
        'after_title'   => '</h4>',
        ] );
}


