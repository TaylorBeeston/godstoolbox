<?php
require '../helpers/multihelper.php';

header("refresh:10; url=../www/index.php");
unset($_SESSION['username']);

// tables must be dropped in this order to resolve foreign key issues
mysqli_query($conn, 'DROP TABLE IF EXISTS CartItems;');
mysqli_query($conn, 'DROP TABLE IF EXISTS Carts;');
mysqli_query($conn, 'DROP TABLE IF EXISTS Users;');
mysqli_query($conn, 'DROP TABLE IF EXISTS Products;');
mysqli_query($conn, 'DROP TABLE IF EXISTS Facts;');

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
$fields = ['Name' => 'VARCHAR(30) NOT NULL',
           'Description' => 'TEXT NOT NULL',
           'Price' => 'DECIMAL(9,2) NOT NULL',
           'Created' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP'];
create_table($conn, 'Products', $fields);

// seed Products
$schema = 'Name, Description, Price';
$values = [['Screwdriver Set', 
            'Magnetic screwdriver set featuring many types of heads', 29.99],
           ['Hammer', 'Regular common hammer', 14.99],
           ['Electical Tape', 'Common roll of electrical tape', 9.99],
           ['Box Knife', 'Long bladed box knife', 14.99],
           ['Flashlight', 'Small, portable flashlight', 4.99],
           ['Small Screwdriver Set', 
            'Very small screwdriver set with magnetic tips', 24.99],
           ['Duct Tape', 'Roll of black duct tape', 4.99],
           ['Needle-Nose Pliers', 'Single pair of needle-nose pliers', 9.99],
           ['Tape Measure', '25 foot tape measure', 4.99],
           ['Tweezers', 'Small pair of tweezers', 4.99]];
insert_into_table($conn, 'Products', $schema, $values);

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
           hash('sha256', 'password'), 1]];
insert_into_table($conn, 'Users', $schema, $values);

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
?>
<h1>Database created successfully!</h1>
<a href="index.php">Click here if not redirected within 20 seconds</a>
