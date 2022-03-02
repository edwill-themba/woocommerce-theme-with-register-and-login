<?php get_header(); ?>
   <div class="container">
       <div class="row">
           <div class="col-sm-9">
              <div class="page-title">
                 <h1><?php the_title(); ?></h1>
               </div>
               <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
               <?php endif; ?>
               <div class="page-content">
                 <?php the_content(); ?>
               </div>
           </div>
           <!-- sidebar -->
           <?php get_sidebar() ?>
           <!-- end sidebar -->
       </div>
   </div>
<?php get_footer(); ?>
    
