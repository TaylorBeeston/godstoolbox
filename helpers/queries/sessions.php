<?php // sessions.php - functions for session-related SQL queries

// returns whether or not a user is logged in
function logged_in() {
  return isset($_SESSION['username']);
}

// logs a user in if they have valid credentials
function log_in($conn, $username, $password) {
  $username = sanitize($conn, $username);
  $query    = "SELECT Password, ID FROM Users WHERE Username = '$username';";
  $result   = mysqli_query($conn, $query);
  $user     = mysqli_fetch_row($result);

  if ($user[0] === hash('sha256', $password)) {
    $_SESSION['username'] = $username;
    update_row($conn, 'Users', $user[1], ['LastLogin' => 'CURRENT_TIMESTAMP']);
    header('Location: index.php');
    die();
  }
}

// returns true if a user is an admin
function is_admin($conn, $username) {
  $username = sanitize($conn, $username);
  $query    = "SELECT AccessLevels.AccessLevel FROM Users JOIN AccessLevels ON
               Users.AccessLevel = AccessLevels.ID
               WHERE Username = '$username';";
  $result   = mysqli_query($conn, $query);
  $level    = mysqli_fetch_row($result);
  return $level[0] === 'Administrator';
}

// returns true if a user is a publisher
function is_pub($conn, $username) {
  $username = sanitize($conn, $username);
  $query    = "SELECT AccessLevels.AccessLevel FROM Users JOIN AccessLevels ON
               Users.AccessLevel = AccessLevels.ID
               WHERE Username = '$username';";
  $result   = mysqli_query($conn, $query);
  $level    = mysqli_fetch_row($result);
  return $level[0] === 'Publisher';
}
