<?php // inserts.php - functions for inserting and updating 
      // values in a MySQL table

// inserts rows into a table
function insert_into_table($conn, $table, $schema, $values) {
  $table  = sanitize($conn, $table);
  $shema  = sanitize($conn, $shema);

  $sql = "INSERT INTO $table ($schema) VALUES " 
    . generate_insert_string($conn, $values) . ";";

  echo "<pre>$sql</pre>";

  mysqli_query($conn, $sql);
}

// updates a row
function update_row($conn, $table, $id, $updates) {
  $table   = sanitize($conn, $table);
  $id      = sanitize($conn, $id);

  $sql = "UPDATE $table SET " . generate_update_string($conn, $updates) . 
         " WHERE ID=$id;";

  mysqli_query($conn, $sql);
}

// creates part of a SQL Query for inserting values
function generate_insert_string($conn, $values) {
  $insert_string = '';
  foreach($values as $value)
    $insert_string .= '(' . implode(', ', querify_array($conn, $value)) . '),';

  return substr($insert_string, 0, -1);
}

// creates part of a SQL Query for updating values
function generate_update_string($conn, $updates) {
  $update_string = '';
  foreach($updates as $field => $value) 
    $update_string .= sanitize($conn, $field) . ' = ' 
                    . quote_strings(sanitize($conn, $value)) . ', ';

  return substr($update_string, 0, -2);
}

// converts an array of values into valid SQL
function querify_array($conn, $array) {
  $querified = [];
  foreach($array as $value)
    array_push($querified, quote_strings(sanitize($conn, $value)));

  return $querified;
}

// adds quotes to a string unless it is a number
function quote_strings($string) {
  return is_numeric($string) ? $string : "'$string'";
}
