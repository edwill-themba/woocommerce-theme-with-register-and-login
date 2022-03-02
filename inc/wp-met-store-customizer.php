<?php

function wp_met_store_customize_register($wp_customize)
{
   $wp_customize->add_section('met_store_customizer', array(
       'title'       => __('Met Store','MET Store Theme'),
       'description' => sprintf(__('Options For Met Store','MET Store Theme')),
       'priority'    => 12
   ));
   /** change logo settings */
   $wp_customize->add_setting('logo_text', array(
       'default'    => _x('METStore','MET Store Theme'),
       'type'       => 'theme_mod'
   ));

   $wp_customize->add_control('logo_text',array(
      'label'     => __('Chane Logo Text','MET Store Theme'),
      'section'   => 'met_store_customizer',
      'priority'  => 1
   ));
   /** end logo */
   
   /** telephone */
   $wp_customize->add_setting('telephone', array(
    'default'    => _x('013-712-4642','MET Store Theme'),
    'type'       => 'theme_mod'
    ));

    $wp_customize->add_control('telephone',array(
        'label'     => __('Chane Telephone','MET Store Theme'),
        'section'   => 'met_store_customizer',
        'priority'  => 2
     ));
    /** end telephone */

    /** products on sale */
    $wp_customize->add_setting('products_on_sale', array(
    'default'    => _x('Come And Select From Our','MET Store Theme'),
    'type'       => 'theme_mod'
    ));

    $wp_customize->add_control('products_on_sale',array(
        'label'     => __('Products on sale','MET Store Theme'),
        'section'   => 'met_store_customizer',
        'priority'  => 3
     ));
    /** end product on sale */
   
    /** products on sale  strong tag */
    $wp_customize->add_setting('products_on_sale_strong', array(
    'default'    => _x('Products On Sale','MET Store Theme'),
    'type'       => 'theme_mod'
    ));

    $wp_customize->add_control('products_on_sale_strong',array(
        'label'     => __('Products on sale','MET Store Theme'),
        'section'   => 'met_store_customizer',
        'priority'  => 4
     ));
    /** end product on sale  strong */

    /** popular brand */
    $wp_customize->add_setting('popular_brand', array(
    'default'    => _x('Popular Brand','MET Store Theme'),
    'type'       => 'theme_mod'
    ));

    $wp_customize->add_control('popular_brand',array(
        'label'     => __('Change Popular Brand','MET Store Theme'),
        'section'   => 'met_store_customizer',
        'priority'  => 5
     ));
    /** end pobular brand */
    
    /** popular brand strong */
     $wp_customize->add_setting('popular_brand_strong', array(
        'default'    => _x('Brands','MET Store Theme'),
        'type'       => 'theme_mod'
        ));
    
    $wp_customize->add_control('popular_brand_strong',array(
            'label'     => __('change popular_brand_strong','MET Store Theme'),
            'section'   => 'met_store_customizer',
            'priority'  => 6
    ));
    /** end popular brand  strong */

    /** goal  */
    $wp_customize->add_setting('goal', array(
        'default'    => _x('What Is Your','MET Store Theme'),
        'type'       => 'theme_mod'
        ));
    
    $wp_customize->add_control('goal',array(
            'label'     => __('change your goal','MET Store Theme'),
            'section'   => 'met_store_customizer',
            'priority'  => 7
    ));
    /** end goal */
     
    /** goal strong  */
     $wp_customize->add_setting('goal_strong', array(
        'default'    => _x('Goal','MET Store Theme'),
        'type'       => 'theme_mod'
        ));
    
    $wp_customize->add_control('goal_strong',array(
            'label'     => __('change your goal strong','MET Store Theme'),
            'section'   => 'met_store_customizer',
            'priority'  => 8
    ));
    /** end goal strong */

    /** trading  */
    $wp_customize->add_setting('trading', array(
        'default'    => _x('Trading','MET Store Theme'),
        'type'       => 'theme_mod'
        ));
    
    $wp_customize->add_control('trading',array(
            'label'     => __('Change trading','MET Store Theme'),
            'section'   => 'met_store_customizer',
            'priority'  => 9
    ));
    /** end trading */

    /** trading strong */
    $wp_customize->add_setting('trading_strong', array(
        'default'    => _x('Hours','MET Store Theme'),
        'type'       => 'theme_mod'
        ));
    
    $wp_customize->add_control('trading_strong',array(
            'label'     => __('Change trading Hours','MET Store Theme'),
            'section'   => 'met_store_customizer',
            'priority'  => 10
    ));
    /** end trading hours strong */
}
add_action('customize_register','wp_met_store_customize_register');
//echo "hallo Mpepho Themba";