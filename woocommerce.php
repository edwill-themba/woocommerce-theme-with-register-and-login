<?php get_header(); ?>
  <div class="row">
      <div class="col-sm-9">
         <?php woocommerce_content(); ?>
         <?php if(is_shop()):?>
            <div class="products-pagination">
                <?php
                //Protect against arbitrary paged values
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                $args = array(
	                   'posts_per_page' => 4,
                       'post_type' => 'products',
                       'category_name' => 'Products',
	                   'paged' => $paged,
                     );
                $the_query = new WP_Query( $args );
               ?>    
            </div>
         <?php endif; ?>
      </div>
      <!-- sidebar -->
      <?php get_sidebar(); ?>
      <!-- end sidebar -->
  </div>
<?php get_footer(); ?>