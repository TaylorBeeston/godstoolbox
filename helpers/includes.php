<?php // includes.php - functions to help with including partials
function windowShopper($product) {
  $id   = $product[0];
  $name = $product[1];
  include '../partials/windowShopper.php';
}

function productWindow($product) {
  $id    = $product[0];
  $name  = $product[1];
  $desc  = $product[2];
  $price = money_format('%.2n', $product[3]);
  include '../partials/productWindow.php';
}

function smallWindow($product) {
  $id    = $product[0];
  $name  = $product[1];
  $price = $product[2];
  include '../partials/smallWindow.php';
}

function productAdmin($product) {
  $id    = $product[0];
  $name  = $product[1];
  $desc  = $product[2];
  $price = money_format('%.2n', $product[3]);
  include '../partials/productAdmin.php';
}

function productForm($product = []) {
  $id    = $product[0];
  $name  = $product[1];
  $desc  = $product[2];
  $price = money_format('%.2n', $product[3]);
  include '../partials/productForm.php';
}

function userAdmin($user) {
  $id           = $user[0];
  $first_name   = $user[1];
  $last_name    = $user[2];
  $username     = $user[3];
  $email        = $user[4];
  $access_level = $user[5];
  include '../partials/userAdmin.php';
}

function loginForm($username = '') {
  include '../partials/login.php';
}

function signupForm($first, $last, $email, $username) {
  include '../partials/signup.php';
}

function badCredentials() {
  include '../partials/badCredentials.php';
}

function cartItem($conn, $cart_item) {
  $pid     = $cart_item[0];
  $qty     = $cart_item[1];
  $id      = $cart_item[2];
  $product = get_by_id($conn, 'Products', $pid, 'Name, Price');
  $name    = $product[0];
  $price   = money_format('%.2n', $product[1] * $qty);
  include '../partials/cartItem.php';
}

function fact($fact_record, $pub) {
  $id   = $fact_record[0];
  $fact = $fact_record[1];
  include '../partials/fact.php';
}

function factForm($fact, $id) {
  include '../partials/factForm.php';
}
