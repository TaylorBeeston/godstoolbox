<?php session_start();
  include 'helpers/forms.php';
  $title = 'Sign up';
  include 'partials/header.php';
?>
<div class="big-red-box">
  <h1>Sign up</h1>
</div>
<div class="two-columns">
  <div class="main">
    <?php 
    signupForm($username);
  ?>
  </div>
</div>
<?php include 'partials/footer.php'; ?>
