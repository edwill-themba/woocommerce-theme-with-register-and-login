<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('test') ?>>
  <header class="sticky-top">
      <div class="information">
        <div class="deliver-info">
           Free Delivery Around South Africa
        </div>
        <div class="find-store">
           Directions To Our Store <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/direction.png"></a>
        </div>
      </div>
      <div class="search">
         <div class="logo">
               <a href="<?php home_url() ?>"><?php echo get_theme_mod('logo_text', 'METStore') ?><i class="fas fa-cart-plus cart"></i></a>
         </div>
         <div class="search-form">
             <?php get_search_form(); ?>
         </div>
         <div class="contacts">
             <i class="fas fa-phone icons"></i><span><?php echo get_theme_mod('telephone','013-712-4642') ?></span>
         </div>
      </div>
      <div class="navigation">
           <div class="met-store-menu">
              <?php
                wp_nav_menu( 
                     array(
                      'menu_location' => 'primary',
                      'menu_class'    => 'nav-menu'
                     ));
                ?>
            </div>
            <div class="toggle">
               <input type="checkbox" id="checkbox" class="checkbox">
               <label for="checkbox">
                 <i class="fas fa-bars bars" onClick="add_active_class()"></i>
                 <i class="fas fa-times cancel" onClick="remove_active_class()"></i>
               </label>
            </div>
        </div>
   </header>
  <div class="container">