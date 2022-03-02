<div class="col-md-3 col-sm-3">
 <div class="sidebar">
     <h5><?php _e("Follow Us On")?></h5>
     <ul class="social-media">
         <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/ist-icon.jpg"></a></li>
         <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/t-icon.png"></a></li>
         <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/f.jpg"></a></li>
         <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/linkedlnn.png"></a></li>
     </ul>
    <?php if(is_active_sidebar('page_sidebar')): ?>
      <?php dynamic_sidebar('page_sidebar') ?>
   <?php endif; ?>
  </div>
 </div>