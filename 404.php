<?php get_header(); ?>
   <div class="container">
       <div class="row">
           <div class="col-sm-12 not-found">
               <h1><?php _e("The Page You Are Looking For Is Not Found") ?></h1>
               <h3><?php _e("Error:404 Not Found")?></h3>
               <p>
                   <?php
                    _e("Please make sure that you check spelling mistakes,your internet connections
                      and refresh the page again");
                   ?>
               </p>
               <div>
                   <i class="fas fa-user-friends user"></i>
               </div>
           </div>
       </div>
   </div>
<?php get_footer(); ?>
    
