<?php // deleteFact.php - deletes a fact
require '../helpers/multihelper.php';
require '../helpers/publisher.php';

if (isset($_GET['id'])) {
  delete_by_id($conn, 'Facts', $_GET['id']);
}

header('Location: facts.php');
die();
