<?php 
  include '../helpers/multihelper.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST')
    log_in($conn, $_POST['username'], $_POST['password']);

  $title = 'Log In';
  include '../partials/header.php';
?>
<div class="big-red-box">
  <h1>Log In</h1>
</div>
<div class="two-columns">
  <div class="main">
    <?php 
      if ($_SERVER['REQUEST_METHOD'] === 'POST')
        badCredentials();

      loginForm($_POST['username']); ?>
  </div>
</div>
<?php include '../partials/footer.php'; ?>
