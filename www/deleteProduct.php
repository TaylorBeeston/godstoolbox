<?php // deleteProduct.php - deletes a product
require '../helpers/multihelper.php';
require '../helpers/admin.php';

if (isset($_GET['id'])) {
  delete_product($conn, $_GET['id']);
}

header('Location: admin.php');
die();
