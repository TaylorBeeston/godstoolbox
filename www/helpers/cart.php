<?php setlocale(LC_MONETARY, 'en_US.UTF-8');
function addToCart($id, $qty) {
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [$id => $qty];
  } else {
    $_SESSION['cart'][$id] += $qty;
  }
}

function removeFromCart($id) {
  unset($_SESSION['cart'][$id]);
}

function calculateSubtotal() {
  if (!isset($_SESSION['cart'])) { return; }
  include 'data/items.php';
  $subtotal = 0;
  foreach($_SESSION['cart'] as $id => $qty) {
    $subtotal += $items[$id]['price'] * $qty;
  }
  return $subtotal;
}

function printTotal() {
  $subtotal = calculateSubtotal();
  $tax = money_format('%.2n', $subtotal * .08);
  $total = money_format('%.2n', $subtotal * 1.08);
  $subtotal = money_format('%.2n', $subtotal);
  include 'partials/total.php';
}

function cartItem($id, $citem, $qty) {
  $price = money_format('%.2n', $citem['price'] * $qty);
  include 'partials/cartItem.php';
}
