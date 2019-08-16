<?php
  include '../helpers/multihelper.php';
  include '../helpers/admin.php';

  $user  = get_by_id($conn, 'Users', $_GET['id'],
                     'FirstName, LastName, UserName, Email, AccessLevel');
  $id    = $_GET['id'];
  $first_name   = $user[0];
  $last_name    = $user[1];
  $username     = $user[2];
  $email        = $user[3];
  $access_level = get_by_id($conn, 'AccessLevels', $user[4], 'AccessLevel')[0];

  $title        = $username;
  include '../partials/header.php'; ?>
<div class="two-columns">
  <div class="main">
    <div class="big-window">
      <?php include '../partials/userForm.php'; ?>
    </div>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
