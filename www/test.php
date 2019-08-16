<?php include '../helpers/multihelper.php';
print_r(get_all($conn, 'Users'));

mysqli_query($conn, 'DROP TABLE IF EXISTS CartItems;');
mysqli_query($conn, 'DROP TABLE IF EXISTS Carts;');
mysqli_query($conn, 'DROP TABLE IF EXISTS Users;');

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
echo mysqli_error($conn);

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

print_r(get_all($conn, 'Users'));
