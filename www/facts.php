<?php 
  include '../helpers/multihelper.php';
  $pub   = is_pub($conn, $_SESSION['username']) || 
           is_admin($conn, $_SESSION['username']);
  $title = 'Facts';
  include '../partials/header.php'; ?>
<div class="big-red-box">
  <h1><em>Facts</em></h1>
</div>
<div class="two-columns">
  <div class="main">
    <?php if ($pub) { ?>
      <a href="factForm.php" class="new-fact" >Click here to add a new Fact!</a>
    <?php } ?>
    <ul class="big-list">
      <?php foreach (get_all($conn, 'Facts', 'ID, Fact') as $fact) { 
              fact($fact, $pub); } ?>
    </ul>
  </div>
  <div class="side">
    <ul>
      <li>
        <h2>Mission</h2>
        <p>Check out our <a href="mission.php">mission statement</a> to get an idea
           of what we're about!</p>
      </li>
      <li>
        <h2>Who are we?</h2>
        <p>God's Toolbox is a nonprofit online retailer of tools and hardware. Find out more
           on our  <a href="about.php">About Us</a> page!</p>
      </li>
    </ul>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
