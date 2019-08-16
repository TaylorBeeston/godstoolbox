<?php // helpers.php - helper functions for SQL queries
function sanitize($conn, $field) {
  return mysqli_real_escape_string($conn, $field);
}
