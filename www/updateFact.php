<?php // updateFact.php - add or update a Fact
require '../helpers/multihelper.php';
require '../helpers/publisher.php';

$fact = $_POST['fact'];

if (isset($_POST['id'])) { // this is an update
  $id = $_POST['id'];
  update_row($conn, 'Facts', $id, ['Fact' => $fact]);
  header('refresh:5; url=facts.php');
  die("Successfully updated fact");
} else { // this is a new fact
  insert_into_table($conn, 'Facts', 'Fact', [[$fact]]);
  header('refresh:5; url=facts.php');
  die("Successfully added fact");
}

