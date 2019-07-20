<?php if (session_status() == PHP_SESSION_NONE) { session_start(); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="description" content="Delivering God's children the tools they need to succeed." />
  <meta name="keywords" content="God, tools, powertools, hardware, buy, Christian" />
  <meta name="author" content="Taylor Beeston" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.php" />
  <link rel="icon" href="favicon.png" />
  <title><?php print $title; ?></title>
</head>
<body>
<div id="header">
  <div id="logo">
    <a href="index.php">
      <img src="images/logo_transparent.png" alt="logo" />
    </a>
    <a href="index.php">
      <h1>God's Toolbox</h1>
    </a>
  </div>
  <a id="cart" href="cart.php">Cart (<?php print count($_SESSION['cart']); ?>)</a>
  <?php include 'menu.php'; ?>
</div>
