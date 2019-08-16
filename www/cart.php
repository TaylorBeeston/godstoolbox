<?php 
  include '../helpers/multihelper.php';
  include '../helpers/cart.php';

  $cartID = get_shopping_cart($conn, $_SESSION['username']);

  // add items to cart
  if (isset($_POST['add'])) {
    $productID = $_POST['productid'];
    $qty       = $_POST['qty'];
    $name      = get_field_from_id($conn, 'Products', $productID, 'Name');
    $title     = "Successfully added $name to cart!";
    add_to_cart($conn, $cartID, $productID, $qty);
  } 

  // remove items from cart
  if (isset($_POST['remove']))
    remove_from_cart($conn, $_POST['remove']);

  // update quantity
  if (isset($_POST['update']))
    update_item_qty($conn, $_POST['update'], $_POST['qty']);

  // empty cart
  if (isset($_GET['empty']))
    empty_cart($conn, $cartID);

  include '../partials/header.php'; 
?>
<div class="big-red-box">
  <h1>Cart</h1>
</div>
<div class="two-columns">
  <div class="main">
    <?php 
      // display banner on successful add
      if (isset($_POST['add'])) {
      print "<div class=\"success\">
          <h3 class=\"big-text\">$title</h3>
        </div>";
    }

    $cart = get_cart($conn, $cartID);

    if (!empty($cart)) { // items in cart
      print "<div class=\"cart\">";

      foreach($cart as $cart_item) {
        cartItem($conn, $cart_item); }

      print_total($conn, $cart);

      print "</div>
        <div class=\"cart-buttons\">
        <a href=\"cart.php?empty=true\">Empty Cart</a>
        <a href=\"checkout.php\">Checkout</a>
      </div>"; 
    } else { // cart is empty
      print "<h1>Your cart is currently empty!</h1>";
    } ?>
    
  </div>
</div>
<?php include '../partials/footer.php'; ?>
