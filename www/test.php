<?php
require '../helpers/database.php';
require '../helpers/query_makers.php';

// tables must be dropped in this order to resolve foreign key issues
mysqli_query($conn, 'DROP TABLE IF EXISTS CartItems;');
mysqli_query($conn, 'DROP TABLE IF EXISTS Carts;');
mysqli_query($conn, 'DROP TABLE IF EXISTS Suggestions;');
mysqli_query($conn, 'DROP TABLE IF EXISTS Users;');

// create Facts
$fields = ['Fact' => 'TEXT NOT NULL'];
create_table($conn, 'Facts', $fields);

// seed Facts
$values = [["God's Toolbox started as a school project by Founder Taylor " .
            "Beeston back in 2019"],
           ['We have now fulfilled over 250,000 orders!'],
           ['Some of the places we have delivered tools to include ' .
            'Madagascar, Tonga, and even Antarctica!'],
           ['Over 75% of our inventory has come as the result of suggestions ' .
            'from shoppers!'],
           ['Taylor has really enjoyed making this website!']];
insert_into_table($conn, 'Facts', 'Fact', $values);

// create Products
$fields = ['Img' => 'VARCHAR(20) NOT NULL',
           'Description' => 'TEXT NOT NULL',
           'Price' => 'DECIMAL(9,2) NOT NULL'];
create_table($conn, 'Products', $fields);

// create AccessLevels
$fields = ['AccessLevel' => 'VARCHAR(15) NOT NULL'];
create_table($conn, 'AccessLevels', $fields);

// seed AccessLevels
$values = [['Customer'], ['Publisher'], ['Administrator']];
insert_into_table($conn, 'AccessLevels', 'AccessLevel', $values);

// create Users
$fields = ['FirstName' => 'VARCHAR(25) NOT NULL',
           'LastName' => 'VARCHAR(25) NOT NULL',
           'UserName' => 'VARCHAR(30) NOT NULL',
           'Email' => 'VARCHAR(50) NOT NULL',
           'Password' => 'CHAR(64) NOT NULL',
           'LastLogin' => 'TIMESTAMP',
           'AccessLevel' => 'SMALLINT UNSIGNED NOT NULL'];
$fkeys = ['AccessLevel' => ['table' => 'AccessLevels',
                            'field' => 'ID']];
create_table($conn, 'Users', $fields, $fkeys);

// seed Users
$schema = 'FirstName, LastName, UserName, Email, Password, AccessLevel';
$values = [['Taylor', 'Beeston', 'taylorbeeston', '123@aol.com', 
           hash('sha256', 'abc123'), 3],
          ['Admin', 'Admin', 'admin', 'admin@admin.com', 
           hash('sha256', 'admin'), 3],
          ['Publisher', 'Publisher', 'publisher', 'pub@pub.com',
           hash('sha256', 'publisher'), 2],
          ['Cusomer', 'Customer', 'customer', 'cust@cust.com',
           hash('sha256', 'customer'), 1],
          ['Andrea', 'Beeston', 'andibeeston', '321@aol.com',
           hash('sha256', 'password'), 1],
          ['Test', 'Example', 'dummy', 'dumdum@dum.dum',
           hash('sha256', 'dummy'), 1]];
insert_into_table($conn, 'Users', $schema, $values);

// create Suggestions
$fields = ['Created' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
           'Product' => 'TEXT NOT NULL',
           'UserID' => 'SMALLINT UNSIGNED NOT NULL'];
$fkeys = ['UserID' => ['table' => 'Users', 'field' => 'ID']];
create_table($conn, 'Suggestions', $fields, $fkeys);

// create Carts
$fields = ['UserID' => 'SMALLINT UNSIGNED NOT NULL'];
$fkeys = ['UserId' => ['table' => 'Users', 'field' => 'ID']];
create_table($conn, 'Carts', $fields, $fkeys);

// create CartItems
$fields = ['CartID' => 'SMALLINT UNSIGNED NOT NULL',
           'ProductID' => 'SMALLINT UNSIGNED NOT NULL',
           'Qty' => 'SMALLINT UNSIGNED NOT NULL'];
$fkeys = ['CartID' => ['table' => 'Carts', 'field' => 'ID'],
         'ProductID' => ['table' => 'Products', 'field' => 'ID']];
create_table($conn, 'CartItems', $fields, $fkeys);

// display Users
echo '<pre>';
print_r(get_all($conn, 'Users'));
echo '</pre>';

// display test User
echo '<h3>Initial</h3>';
echo '<pre>';
print_r(get_by_id($conn, 'Users', 6));
echo '</pre>';

// update test User
$updates = ['FirstName' => 'Changed', 'Password' => hash('sha256', 'pw')];
update_row($conn, 'Users', 6, $updates);

// display test User
echo '<h3>After Updating</h3>';
echo '<pre>';
print_r(get_by_id($conn, 'Users', 6));
echo '</pre>';

// delete test User
delete_by_id($conn, 'Users', 6);

// display Users
echo '<h3>After Deleting Test User</h3>';
echo '<pre>';
print_r(get_all($conn, 'Users'));
echo '</pre>';

