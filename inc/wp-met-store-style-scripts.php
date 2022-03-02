<?php
 
 /**
  * Loads all important themes styles
  */
  function wp_met_store_styles()
  {
      wp_register_style('main-style',get_stylesheet_directory_uri().'/style.css','','all');
      wp_enqueue_style('main-style');
      wp_register_style('font-awesome',get_template_directory_uri().'/css/all.css','main-style','all');
      wp_enqueue_style('font-awesome');
      wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css','font-awesome','all');
      wp_enqueue_style('bootstrap');
      wp_register_style('custom-style',get_template_directory_uri().'/css/custom-style.css','bootstrap','all');
      wp_enqueue_style('custom-style');
 }
  add_action('wp_enqueue_scripts','wp_met_store_styles');

  /**
  * Loads all important themes scripts
  */
  function wp_met_store_scripts()
  {
      wp_deregister_script('jquery');
      wp_register_script('jquery-3.3.1',get_template_directory_uri().'/js/jquery-3.3.1.js','',true);
      wp_enqueue_script('jquery-3.3.1');
      wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js','jquery-3.3.1',true);
      wp_enqueue_script('bootstrap');
      wp_register_script('font-awesome',get_template_directory_uri().'/js/all.js','bootstrap',true);
      wp_enqueue_script('font-awesome');
      wp_register_script('app',get_template_directory_uri().'/js/app.js','font-awesome',true);
      wp_enqueue_script('app');
  }
  add_action('wp_enqueue_scripts','wp_met_store_scripts');

 