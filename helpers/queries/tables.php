<?php // tables.php - functions for creating MySQL Tables
// check if a table exists
function table_exists($conn, $table) {
  return mysqli_num_rows(mysqli_query($conn, "SHOW TABLES LIKE '$table';")) > 0;
}

// creates a database table
function create_table($conn, $table, $fields, $foreignkeys = '') {
  // drop table if it exists
  mysqli_query($conn, "DROP TABLE IF EXISTS $table;");

  // generate fields section of SQL Query
  $fields_string = create_fields_string($fields);

  // generate foreign keys section of SQL Query (if needed)
  if (!empty($foreignkeys))
    $foreignkeys_string = create_fk_string($foreignkeys);

  // generate query
  $sql = "CREATE TABLE IF NOT EXISTS $table (
            ID SMALLINT UNSIGNED AUTO_INCREMENT,
            $fields_string
            PRIMARY KEY(ID)$foreignkeys_string
          );";

  // execute query
  mysqli_query($conn, $sql);
}

// returns part of a SQL query for initializing a table
function create_fields_string($fields) {
  $fields_string = '';
  foreach($fields as $name => $params)
    $fields_string .= "$name $params,\n";

  return $fields_string;
}

// returns part of a SQL query for handling foreign keys
function create_fk_string($foreignkeys) {
  $fk_string = '';
  foreach($foreignkeys as $field => $parent)
    $fk_string .= ",\nFOREIGN KEY ($field) "
                  . "REFERENCES {$parent['table']}\n"
                  . "({$parent['field']})";

  return $fk_string;
}
