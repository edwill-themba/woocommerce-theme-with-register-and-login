<?php
 ob_start();
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
    <?php get_header(); ?>
    <div class="container">
        <div class="row">
           <div class="col-sm-9">
           <div class="login-page">
            <div class="login">
              <div class="box">
                <i class="fas fa-user user"></i>
              </div>
              <div class="box">
                <h2>Enter Login Details</h1>
                <form id="frm-login" class="frm-login" action="<?php the_permalink() ?>" method="POST">
                  <div class="form-row">
                    <span><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" id="email" class="input-control" placeholder="Enter your email" required>
                  </div>
                  <div class="form-row">
                    <span><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" id="password" class="input-control" placeholder="Enter your password" required>
                  </div>
                  <div class="form-row">
                    <button id="login" type="submit" name="submit" class="btn-login">login</button>
                  </div>
                </form>
              </div>
             </div>
             </div>
           </div>
           <?php get_sidebar(); ?>
       </div>
   </div>
   <?php get_footer(); ?>
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

     if(!is_wp_error($user)){
       ob_flush();
       $site_url = site_url().'/index.php/shop/';
       echo "<script>window.location ='".$site_url."'</script>";
     }else{
       echo $user->get_error_message();
    }
  }

?>