<?php // gets.php - functions for getting values from a MySQL database

// returns all rows of a table
function get_all($conn, $table, $cols = '*') {
  $table = sanitize($conn, $table);
  $cols  = sanitize($conn, $cols);

  $query  = "SELECT $cols FROM $table";
  $result = mysqli_query($conn, $query);

  return mysqli_fetch_all($result);
}

// returns the row with the specified id
function get_by_id($conn, $table, $id, $cols = '*') {
  $table = sanitize($conn, $table);
  $cols  = sanitize($conn, $cols);
  $id    = sanitize($conn, $id);

  $query  = "SELECT $cols FROM $table WHERE ID=$id";
  $result = mysqli_query($conn, $query);

  return mysqli_fetch_row($result);
}

// returns the most recent rows with an optional limit
function get_most_recent($conn, $table, $cols = '*', $limit = 0) {
  $table = sanitize($conn, $table);
  $cols  = sanitize($conn, $cols);
  $limit = sanitize($conn, $limit);

  $limit  = empty($limit) ? '' : " LIMIT $limit";
  $query  = "SELECT $cols FROM $table ORDER BY Created DESC, ID DESC$limit;";
  $result = mysqli_query($conn, $query);

  return mysqli_fetch_all($result);
}

// returns a random row from a given table
function get_random($conn, $table, $cols = '*') {
  $table = sanitize($conn, $table);
  $cols  = sanitize($conn, $cols);

  $query  = "SELECT $cols FROM $table ORDER BY RAND() LIMIT 1;";
  $result = mysqli_query($conn, $query);

  return mysqli_fetch_row($result);
}

// returns the ID of a given user
function get_user_id($conn, $username) {
  $username = sanitize($conn, $username);

  $query  = "SELECT ID FROM Users WHERE Username = '$username';";
  $result = mysqli_query($conn, $query);
  $id     = mysqli_fetch_row($result);

  return $id[0];
}

function get_users_with_access_levels($conn) {
  $query = "SELECT Users.ID, FirstName, LastName, UserName, Email, AccessLevels.AccessLevel
            FROM Users JOIN AccessLevels ON Users.AccessLevel = AccessLevels.ID;";
  $result = mysqli_query($conn, $query);

  return mysqli_fetch_all($result);
}

function get_access_level_id($conn, $level) {
  $level = sanitize($conn, $level);

  $query = "SELECT ID FROM AccessLevels WHERE AccessLevel=$level";
  $result = mysqli_query($conn, $query);
  $id     = mysqli_fetch_row($result);

  return $id[0];
}

function get_field_from_id($conn, $table, $id, $field) {
  $table = sanitize($conn, $table);
  $field = sanitize($conn, $field);
  $id    = sanitize($conn, $id);

  $query  = "SELECT $field FROM $table WHERE ID = $id;";
  $result = mysqli_query($conn, $query);
  $field     = mysqli_fetch_row($result);

  return $field[0];
}
