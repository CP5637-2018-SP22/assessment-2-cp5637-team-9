<?php 
    function wpb_customize_register($wp_customize){
    
    $wp_customize->add_section('showcase', array(
        'title'  =>  __('showcase', 'Assesment 2'),
        'description' => sprintf(__('options for  showcase', 'Assesment 2')),
        'priority'  => 130
    ));
    $wp_customize->add_setting('showcase_image', array(
    'default'  => get_bloginfo('template_directory').'/img/showcase.jpg',
        'type'  => 'theme_mod'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image', array(
    'label' => __('showcase Image', 'Assesment 2'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    ))); 
    
    
    $wp_customize->add_setting('showcase_heading', array(
    'default'  => _x('Custom Bootstrap Wordpress Theme', 'Assesment 2'),
        'type'  => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_heading', array(
    'label' => __('heading', 'Assesment 2'),
        'section' => 'showcase',
        'priority' => 2
    ));
        
    $wp_customize->add_setting('showcase_text', array(
    'default'  => _x('Hum Thume', 'Assesment 2'),
        'type'  => 'theme_mod'
    ));
    $wp_customize->add_control('showcase_text', array(
    'label' => __('Text', 'Assesment 2'),
        'section' => 'showcase',
        'priority' => 3
    ));   
    
    $wp_customize->add_setting('btn_url', array(
    'default'  => _x('http://test.com', 'Assesment 2'),
        'type'  => 'theme_mod'
    ));
    $wp_customize->add_control('btn_url', array(
    'label' => __('Button URL', 'Assesment 2'),
        'section' => 'showcase',
        'priority' => 4
    )); 
        
    $wp_customize->add_setting('btn_text', array(
    'default'  => _x('Read More', 'Assesment 2'),
        'type'  => 'theme_mod'
    ));
    $wp_customize->add_control('btn_text', array(
    'label' => __('Button Text', 'Assesment 2'),
        'section' => 'showcase',
        'priority' => 5
    )); 
}

add_action('customize_register', 'wpb_customize_register');