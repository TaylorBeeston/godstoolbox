<?php // publisher.php - restricts page to admins and publishers
  // redirects unless user is admin or publisher
if (!(is_admin($conn, $_SESSION['username']) || 
      is_pub($conn, $_SESSION['username'])))
  header('Location: index.php');
