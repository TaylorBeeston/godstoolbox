<?php // userUpdate.php - add or update a user
require '../helpers/multihelper.php';
require '../helpers/admin.php';

// validate all fields
$first_name   = $_POST['firstname'];
$last_name    = $_POST['lastname'];
$email        = $_POST['email'];
$username     = $_POST['username'];
$password     = $_POST['password'];
$access_level = $_POST['accesslevel'];
$errors = validate_user_info($first_name, $last_name, $email, $username,
                             $password, $password);

// redirect if invalid data
if ($errors) {
  header('refresh:5; url=admin.php');
  die($errors);
}

$id = $_POST['id'];

// build updates array
$updates = [];

if (isset($first_name))
  $updates['FirstName'] = $first_name;

if (isset($last_name))
  $updates['LastName'] = $last_name;

if (isset($email))
  $updates['Email'] = $email;

if (isset($username))
  $updates['UserName'] = $username;

if (isset($password))
  $updates['Password'] = hash('sha256', $password);

if (isset($access_level))
  $updates['AccessLevel'] = $access_level;

// update User
update_row($conn, 'Users', $id, $updates);

header('refresh:5; url=admin.php');
die("Successfully updated $username");
