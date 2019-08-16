<?php // productUpdate.php - add or update a product
require '../helpers/multihelper.php';
require '../helpers/admin.php';

// validate all fields
$name   = $_POST['name'];
$desc   = $_POST['desc'];
$price  = $_POST['price'];
$errors = validate_product_info($name, $desc, $price);

// redirect if invalid data
if ($errors) {
  header('refresh:5; url=admin.php');
  die($errors);
}


if (isset($_POST['id'])) { // this is an update
  $id = $_POST['id'];
  update_row($conn, 'Products', $id,
             ['Name' => $name, 'Description' => $desc, 'Price' => $price]);
} else { // this is a new product
  insert_into_table($conn, 'Products', 'Name, Description, Price',
                    [[$name, $desc, $price]]);
  $id = get_most_recent($conn, 'Products', 'ID', 1)[0][0];
}

// handle image upload
if (isset($_FILES['image']))
  move_uploaded_file($_FILES['image']['tmp_name'], "images/products/$id.jpg");

header('refresh:5; url=admin.php');
die("Successfully added $name");
