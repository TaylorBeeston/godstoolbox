<?php 
  $title = 'God\'s Toolbox';
  include 'helpers/includes.php';
  include 'data/items.php';
  include 'partials/header.php'; ?>
<div class="big-red-box">
  <h1 class="big-text">Welcome to&nbsp;<em>God's Toolbox!</em></h1>
  <p class="small-text">Delivering God's children the tools they need to succeed.</p>
</div>
<div class="two-columns">
  <div class="main">
    <h2>Recently Added Items</h2>
    <?php for ($i = 0; $i < 3; $i++) { windowShopper($items[$i]); } ?>
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
<?php include 'partials/footer.php'; ?>
