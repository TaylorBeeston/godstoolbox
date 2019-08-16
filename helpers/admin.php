<?php // admin.php - restricts page to admins
  // redirects unless user is admin
  if (!is_admin($conn, $_SESSION['username']))
    header('Location: index.php');
