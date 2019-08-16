<?php
$servername = 'localhost';
$username   = 'taylor';
$password   = 'abc123';

// create connection
$conn = mysqli_connect($servername, $username, $password, 'godstoolbox');

// check connection
if (!$conn)
  die('Connection failed: ' . mysqli_connect_error());

// set charset
mysqli_set_charset('utf8');
