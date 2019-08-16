<?php // database.php - sets up the database connection
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$servername = $url['host'];
$username   = $url['user'];
$password   = $url['pass'];
$db         = preg_replace('/\?reconnect=true/', '', substr($url['path'], 1));

// create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// check connection
if (!$conn)
  die('Connection failed: ' . mysqli_connect_error());

// set charset
mysqli_set_charset('utf8');
