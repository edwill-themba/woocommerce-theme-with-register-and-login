<?php
 /**
  * template name:custom-registration
  */
?>
<?php  global $user_ID; ?>
<?php if($user_ID): ?>
    <?php $user = wp_get_current_user(); ?>
    <p><?php echo $user->display_name ?></p>
    <p><?php echo "user logged In" ?></p>
<?php else : ?>
   <?php get_header(); ?>
   <div class="container">
   <!-- bootstrap row -->
   <div class="row">
   <div class="col-sm-9">
   <form id="frm-register" class="frm-register" action="<?php the_permalink() ?>" method="POST">
      <div class="div form-row">
        <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter your full name">
      </div>
     <div class="form-row">
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
      </div>
     <div class="form-row">
     <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
        </div>
     <div class="form-row">
       <button  type="submit" name="submit" class="btn btn-outline-primary">register</button>
     </div>
   </form>
   </div>
   <!-- end col sm 9 -->
    <!--sidebar -->
    <div class="col-sm-3">
      test
    </div>
   <!--end sidebar -->
   </div>
   <!-- end row -->
   </div>
   <!-- end container -->
   <?php get_footer() ?>
<?php endif ; ?>
<?php 
  if(isset($_POST['submit'])){
    $full_name = esc_sql($_POST['full_name']);
    $email = esc_sql($_POST['email']);
    $password = esc_sql($_POST['password']);

    $credentials = array();
    $credentials['user_login'] = $full_name;
    $credentials['user_email'] = $email;
    $credentials['user_pass']  = $password;

    $user = wp_insert_user($credentials);
    if(is_wp_error( $user )){
       echo $user->get_error_message();
    }else{
      wp_redirect(site_url()."/index.php/login/");
    }
  }

?>