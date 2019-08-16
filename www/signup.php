<?php 
  include '../helpers/multihelper.php';
  $title = 'Sign up';
  include '../partials/header.php';

  $first    = '';
  $last     = '';
  $email    = '';
  $username = '';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first    = $_POST['firstname'];
    $last     = $_POST['lastname'];
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passconf = $_POST['verify-password'];
    $errors   = validate_user_info($first, $last, $email, $username, $password, 
                                   $passconf);
    if (!$errors) {
      $schema = 'FirstName, LastName, UserName, Email, Password, AccessLevel';
      $values = [[$first, $last, $username, $email, hash('sha256', $password), 1]];
      insert_into_table($conn, 'Users', $schema, $values);
      log_in($conn, $username, $password);
    }
  }
?>
<div class="big-red-box">
  <h1>Sign up</h1>
</div>
<div class="two-columns">
  <div class="main">
    <?php 
    if ($errors) { echo "<pre>$errors</pre>"; } 
    signupForm($first, $last, $email, $username);
    ?>
  </div>
</div>
<?php include '../partials/footer.php'; ?>
