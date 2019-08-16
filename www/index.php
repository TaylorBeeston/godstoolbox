<?php 
  $title = 'God\'s Toolbox';
  include '../helpers/multihelper.php';
  include '../partials/header.php'; ?>

<div class="big-red-box">
  <h1 class="big-text">Welcome to&nbsp;<em>God's Toolbox!</em></h1>
  <p class="small-text">Delivering God's children the tools they need to succeed.</p>

<?php // allow database to be built if there is no Users table, or if current
      // User is an admin
  if (!table_exists($conn, 'Users') || is_admin($conn, $_SESSION['username'])) { ?>
    <a href="../helpers/create_database.php">Click here to create/reset the database!</a>
  <?php } ?>

</div>
<div class="two-columns">
  <div class="main">
    <h2>Recently Added Items</h2>

    <?php foreach (get_most_recent($conn, 'Products', 'ID, Name', 3) as $product) { 
            windowShopper($product); } ?>

    <h2><a href="browse.php"><em class="underlined">See the rest here!</em></a></h2>
  </div>
  <div class="side">
    <ul>
      <li>
        <h2>Who are we?</h2>
        <p>God's Toolbox is a nonprofit online retailer of tools and hardware. Find out more
           on our  <a href="about.php">About Us</a> page!</p>
      </li>
      <li>
        <h2>Suggest an item</h2>
        <p>To suggest a new item for us to sell, please visit our 
           <a href="suggestions.php">suggestions</a> page!</p>
      </li>
    </ul>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
