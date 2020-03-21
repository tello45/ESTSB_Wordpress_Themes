<?php

function ju_customize_register( $wp_customize ){

    $wp_customize->get_section('title_tagline')-> title = 'General';

    $wp_customize->add_panel('estsb',[
        'title' =>  'estsb',
        'descrption' => ' <p> estsb panale </p>',
        'priority' => 160 
    ]);
    ju_social_customizer_section( $wp_customize );
    ju_misc_customizer_section( $wp_customize );

}


