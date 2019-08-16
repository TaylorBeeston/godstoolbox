<?php // deleteUser.php - deletes a user
require '../helpers/multihelper.php';
require '../helpers/admin.php';

if (isset($_GET['id'])) {
  delete_user($conn, $_GET['id']);
}

header('Location: admin.php');
die();
