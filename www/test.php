<?php include '../helpers/multihelper.php';
print_r(get_all($conn, 'Users'));
print_r(get_all($conn, 'AccessLevels'));
print_r(get_all($conn, 'Products'));

