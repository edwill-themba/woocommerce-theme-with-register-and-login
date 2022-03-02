<?php get_header(); ?>
   <div class="container">
       <div class="row">
           <div class="col-md-9 col-sm-9">
               <div class="products-on-sale">
                  <h1><?php echo get_theme_mod('products_on_sale','Come And Select From Our') ?>  <strong><?php echo get_theme_mod('products_on_sale_strong','Products On Sale') ?></strong></h1>
                  <div class="sale-products">
                      <?php if(is_active_sidebar('products_on_sale')): ?>
                         <?php dynamic_sidebar('products_on_sale'); ?>
                      <?php endif; ?>
                  </div>
               </div>
               <div class="show-case">
                   <h1><?php echo get_theme_mod('popular_brand','View Our Most Popular') ?> <strong><?php echo get_theme_mod('popular_brand_strong','Brands') ?></strong></h1>
                   <div class="popular-brands">
                      <div class="brand">
                          <h5>Mass Tech</h5>
                           <img src="<?php bloginfo('template_directory') ?>/images/mass-tech.jpg">
                           <p>Muscel Tech</p>
                      </div>
                      <div class="brand">
                          <h5>Evox</h5>
                           <img src="<?php bloginfo('template_directory') ?>/images/evox.jpg">
                           <p>Evox Advanced Nutrition</p>
                      </div>
                      <div class="brand">
                          <h5>USN</h5>
                           <img src="<?php bloginfo('template_directory') ?>/images/usn.jpg">
                           <p>Ultimate Sport Nutrition</p>
                      </div>
                      <div class="brand">
                          <h5>NPL</h5>
                           <img src="<?php bloginfo('template_directory') ?>/images/npl.jpg">
                           <p>National Perfomence Lab</p>
                      </div>
                   </div>
               </div>
               <div class="goal">
                   <h1><?php echo get_theme_mod('goal','What Is Your') ?>  <strong><?php echo get_theme_mod('goal_strong','Goal') ?></strong></h1>
                   <div class="goal-info">
                       <div>
                           <h5>Weight Loss</h5>
                           <img src="<?php bloginfo('template_directory') ?>/images/icon_4.png">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime cumque ea voluptate earum molestiae aliquid nam laboriosam eveniet voluptatibus! </p>
                       </div>
                       <div>
                           <h5>Gain Weight</h5>
                           <img src="<?php bloginfo('template_directory') ?>/images/icon_7.png">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ducimus voluptatum, incidunt vitae vel ratione tenetur ipsa officiis odit.</p>
                       </div>
                       <div>
                           <h5>Healthy Diet</h5>
                           <img src="<?php bloginfo('template_directory') ?>/images/icon_8.png">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nemo natus voluptatem consectetur vero quasi eligendi vitae nisi officia, tenetur </p>
                       </div>
                   </div>
               </div>
               <div class="trading-hours">
                  <h1><?php echo get_theme_mod('trading','Trading') ?>   <strong><?php echo get_theme_mod('trading_strong','Hours') ?></strong></h1>
                   <table class="table table-striped" style="width:770px;">
                   <tr>
                           <td style="color:#087530;">Day Of The Year</td>
                           <td style="color:#087530;">Opening And Closing Time</td>
                       </tr>
                       <tr>
                           <td style="padding-left:20px;margin-left:20px;">Monday-Thursday</td>
                           <td style="padding-left:20px;margin-left:20px;">09:00 - 18:00</td>
                       </tr>
                       <tr>
                           <td style="padding-left:20px;margin-left:20px;">Friday</td>
                           <td style="padding-left:20px;margin-left:20px;">09:00 - 19:00</td>
                       </tr>
                       <tr>
                           <td style="padding-left:20px;margin-left:20px;">Saturday</td>
                           <td style="padding-left:20px;margin-left:20px;">09:00 - 17:00</td>
                       </tr>
                       <tr>
                           <td style="padding-left:20px;margin-left:20px;">Sunday</td>
                           <td style="padding-left:20px;margin-left:20px;">09:00 - 16:00</td>
                       </tr>
                       <tr>
                           <td style="padding-left:20px;margin-left:20px;">Public Holiday</td>
                           <td style="padding-left:20px;margin-left:20px;">09:00 - 16:00</td>
                       </tr>
                   </table>
               </div>
           </div>
           <!-- sidebar -->
           <?php get_sidebar(); ?>
           <!-- end sidebar -->
       </div>
   </div>
<?php get_footer(); ?>
    
