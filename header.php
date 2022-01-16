<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body>
  <header>
      <nav class="navigation">
           <div class="logo">
               <a href="<?php home_url() ?>"><?php bloginfo('name') ?><i class="fas fa-cart-plus cart"></i></a>
           </div>
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
                 <i class="fas fa-bars bars"></i>
                 <i class="fas fa-times cancel"></i>
               </label>
            </div>
       </nav>
       <div class="met-store-head">
         <div class="contacts">
             <ul>
                <li><i class="fas fa-phone icons"></i><span>(013)712462</span></li>
                <li><i class="fas fa-envelope icons"></i><span>info@met-store.co.za</span></li>
             </ul>
         </div>
         <div class="social-media">
           <ul>
              Follow Us On
              <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/f.jpg"></a></li>
              <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/ist-icon.jpg"></a></li>
              <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/linkedlnn.png"></a></li>
              <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/t-icon.png"></a></li>
           </ul>
          </div>
       </div>
       <!-- end contacts and social media -->
  </header>
  <div class="container">