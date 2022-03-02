<?php

// include style scripts template
require_once get_template_directory().'/inc/wp-met-store-style-scripts.php';

// include the theme customizer
require_once get_template_directory().'/inc/wp-met-store-customizer.php';

/**
 * themes support functions including woocommerce,registering nav menus
 */
function wp_met_store_theme_support()
{
     register_nav_menus( array(
        'primary'  => __('Primary Menu','MET Store Theme')
     ));

     //add woocommerce
     add_theme_support('woocommerce');

     //register page sidebar
     register_sidebar( 
      array(
        'name'              => 'Page_Sidebar',
         'id'               => 'page_sidebar',
         'before_widget'    => '<div class="sidebar-module">',
         'after_widget'     => '</div>',
         'before_title'     => '<h5>',
         'after_title'      => '</h5>'
      ));

      // products on sale
      register_sidebar( 
        array(
          'name'              => 'Products_On_Sale',
           'id'               => 'products_on_sale',
           'before_widget'    => '<div>',
           'after_widget'     => '</div>',
           'before_title'     => '<h5>',
           'after_title'      => '</h5>'
        ));
    
       
      // add post thumbnail
      set_post_thumbnail_size( 250, 300, false);
}
add_action('after_setup_theme','wp_met_store_theme_support');

/**
 * show the logout menu when user is logged in
 */
function wp_met_store_logout_menu_link($items, $args){
    if($args->menu_location == 'primary'){
        if(is_user_logged_in()){
          // get current user logged in
          $user = wp_get_current_user();
          //directs to the logout url
          $logout = site_url().'/index.php/login';
          $items .= '<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a style="color:#087530;" href="'.$user->user_url.'">'.$user->display_name.'</a></li>';
          $items .= '<li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a href="'.wp_logout_url($logout).'">'.__('Logout').'</a></li>';
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
       .wc-block-grid__product-add-to-cart.wp-block-button {
           display: none;
        }
        .woocommerce ul.products li.product .button {
           display: none;
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

/**
 * return number of character on a single post
 */
 function wp_met_store_excerpt_length()
{
  return 55;
}
add_filter('excerpt_length','wp_met_store_excerpt_length');
/**
 * Add read more on the specific post
 */
function wp_met_store_add_read_more()
{
  global $post;
  return '<a class="more-tag" href="'.get_permalink($post->ID).'">[Read More...]</a>';
}
add_filter('excerpt_more','wp_met_store_add_read_more');
