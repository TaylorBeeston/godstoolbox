<ul id="header-nav">
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a class="dropbtn" href="about.php">About Us</a>
    <div class="dropdown-content">
      <a href="mission.php">Mission</a>
      <a href="facts.php">Facts</a>
    </div>
  </li>
  <li><a href="browse.php">Products</a></li>
  <li class="dropdown">
    <a class="dropbtn" href="contact.php">Contact Us</a>
    <div class="dropdown-content">
      <a href="suggestions.php">Suggestions</a>
    </div>
  </li>
  <li class="menu-right">
    <?php if (isset($_SESSION['username'])) {
      print "<a href=\"controllers/logout.php\">Log Out</a>";
    } else {
      print "<a href=\"login.php\">Log In</a>";
    } ?>
  </li>
  <li class="menu-right">
    <?php if ($_SESSION['username'] == 'admin') {
      print "<a href=\"admin.php\">Admin</a>";
    } ?>
  </li>
</ul>
