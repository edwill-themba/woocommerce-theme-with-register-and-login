<?php
  /**
   * template name: custom-login
   */
 ?>
 <?php  global $user_ID; ?>
 <?php if($user_ID): ?>
    <?php $user = wp_get_current_user(); ?>
    <p><?php echo $user->display_name ?></p>
    <p><?php echo "user logged In" ?></p>
<?php else : ?>
    <form id="frm-login" class="frm-login" action="<?php the_permalink() ?>" method="POST">
      <div class="form-row">
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
      </div>
     <div class="form-row">
     <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
        </div>
     <div class="form-row">
       <button id="login" type="submit" name="submit" class="btn btn-outline-primary">login</button>
     </div>
   </form>
<?php endif ; ?>
<?php 
  if(isset($_POST['submit'])){
    $username=  esc_sql($_POST['email']);
    $password = esc_sql($_POST['password']);
   
    $credentials = array();
    $credentials['user_login'] = $username;
    $credentials['user_password'] = $password;
    $credentials['remember'] = true;

  
     $user = wp_signon($credentials,false);

     if(is_wp_error($user)){
        echo $user->get_error_message();
     }else{
      wp_redirect(site_url().'/index.php/shop/');
    }
  }

?>