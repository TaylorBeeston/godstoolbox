<?php 
  session_start();
  include 'helpers/cart.php';
  include 'data/items.php';

  // add items to cart
  if (isset($_POST['itemid'])) {
    $id       = $_POST['itemid'];
    $qty      = $_POST['qty'];
    $item     = $items[$id];
    $safeName = htmlspecialchars($item['name']);
    $title    = "Successfully added $safeName to cart!";
    addToCart($id, $qty);
  } 

  // remove items from cart
  if (isset($_POST['removeitem'])) {
    removeFromCart($_POST['removeitem']);
  }

  include 'partials/header.php'; 
?>
<div class="big-red-box">
  <h1>Cart</h1>
</div>
<div class="two-columns">
  <div class="main">
    <?php 
      // display banner on successful add
      if (isset($_POST['itemid'])) {
      print "<div class=\"success\">
          <h3 class=\"big-text\">$title</h3>
        </div>";
    }

    if (!empty($_SESSION['cart'])) { // items in cart
      print "<div class=\"cart\">";

      foreach($_SESSION['cart'] as $cid => $quantity) {
        cartItem($cid, $items[$cid], $quantity); }

      printTotal();

      print "</div>
        <div class=\"cart-buttons\">
        <a href=\"controllers/emptycart.php\">Empty Cart</a>
        <a href=\"checkout.php\">Checkout</a>
      </div>"; 
    } else { // cart is empty
      print "<h1>Your cart is currently empty!</h1>";
    } ?>
    
  </div>
</div>
<?php include 'partials/footer.php'; ?>
