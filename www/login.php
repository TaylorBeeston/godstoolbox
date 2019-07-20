<?php session_start();
  include 'data/users.php';
  include 'helpers/forms.php';
  if (isset($_POST['form-sent'])) {
    $username = $_POST['username'];
    $success = validateLogin($username, $_POST['password']);
    if ($success) {
      $_SESSION['logged_in'] = TRUE;
      $_SESSION['username']  = $username;
      header('Location: index.php');
      die();
    }
  }
  $title = 'Log In';
  include 'partials/header.php';
?>
<div class="big-red-box">
  <h1>Log In</h1>
</div>
<div class="two-columns">
  <div class="main">
    <?php if ($success === false) {
        badCredentials();
      }
      loginForm($username); ?>
  </div>
</div>
<?php include 'partials/footer.php'; ?>
