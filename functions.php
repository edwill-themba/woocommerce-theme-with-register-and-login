<?php

// include style scripts template
require_once get_template_directory().'/inc/wp-met-store-style-scripts.php';

/**
 * themes support functions including woocommerce,registering nav menus
 */
function wp_met_store_theme_support()
{
     register_nav_menus( array(
        'primary'  => __('Primary Menu','MET Store Theme')
     ));

    
}
add_action('after_setup_theme','wp_met_store_theme_support');

/**
 * show the logout menu when user is logged in
 */
function wp_met_store_logout_menu_link($items, $args){
    if($args->theme_location == 'primary'){
        if(is_user_logged_in()){
           $items .='<li  style="color:#fff;" class="right"><a href="'.site_url().'/index.php/login/">'. __("Logout").'</a></li>';
         }
    }
    return $items;
}
add_filter('wp_nav_menu_items','wp_met_store_logout_menu_link',10,2);

/**
 * hide checkout and basket links if user not logged in
 */
function wp_met_store_hide_woocommerce_links()
{
   if(!is_user_logged_in()){
    ?>
     <style>
       #menu-item-17{
           display:none;
       }
       #menu-item-16{
           display:none;
       }
     </style>
    <?php
   }else{
     ?>
      <style>
        #menu-item-41{
          display:none;
        }
        #menu-item-36{
          display:none;
        }
       </style>
     <?php 
   }
}
add_action('wp_head','wp_met_store_hide_woocommerce_links');