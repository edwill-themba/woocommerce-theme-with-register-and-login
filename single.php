<?php get_header(); ?>
   <div class="container">
       <div class="row">
           <div class="col-md-9 col-sm-9">
              <div class="blog-posts">
                <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                    <hr>
                    <div class="post-thumb-nail">
                     <?php if(has_post_thumbnail()): ?>
                       <?php the_post_thumbnail(); ?>
                     <?php endif; ?>
                    </div>
                    <hr>
                    <div class="post-body">
                      <p><?php the_content(); ?></p>
                    </div>
                    <?php if(is_user_logged_in()) : ?>
                    <?php comments_template(); ?>
                    <?php endif; ?>
             </div>
           </div>
           <!-- sidebar -->
           <?php get_sidebar(); ?>
           <!-- end sidebar -->
       </div>
   </div>
<?php get_footer(); ?>