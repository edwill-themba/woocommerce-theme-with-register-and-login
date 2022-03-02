<?php get_header(); ?>
   <div class="container">
       <div class="row">
           <div class="col-md-9 col-sm-9">
              <div class="blog-posts">
                  <?php if(have_posts()): ?>
                     <?php while(have_posts()): the_post() ?>
                          <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                          <hr>
                          <div class="post-thumb-nail">
                              <?php if(has_post_thumbnail()): ?>
                                 <?php the_post_thumbnail(); ?>
                              <?php endif; ?>
                          </div>
                          <hr>
                          <div class="post-body">
                             <p><?php the_excerpt(); ?></p>
                          </div>
                     <?php endwhile; ?>
                     <div class="paginate">
                       <?php
                          global $wp_query;
                          $big = 999999999; // need an unlikely integer
                         echo paginate_links( array(
	                       'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	                       'format' => '?paged=%#%',
	                       'current' => max( 1, get_query_var('paged') ),
	                       'total' => $wp_query->max_num_pages
                            ) );
                         ?>
                     </div>
                  <?php else: ?>
                      <h1><?php _e("No Post Found"); ?></h1>
                  <?php endif; ?>
              </div>
           </div>
           <!-- sidebar -->
           <?php get_sidebar(); ?>
           <!-- end sidebar -->
       </div>
   </div>
<?php get_footer(); ?>
    
