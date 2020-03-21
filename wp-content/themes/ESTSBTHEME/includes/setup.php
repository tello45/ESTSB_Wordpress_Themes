<?php

function jU_setup_theme(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );

    register_nav_menu('primary','primary menu');
    register_nav_menu('secondary','secondary menu');

    if (function_exists('quads_register_ad')){
        quads_register_ad( array('location' => 'estschool_header', 
        'description' => 'estschool position')
     );
        
        }
   

}