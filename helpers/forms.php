<?php // forms.php - functions to aid with handling forms
// validates user fields
function validate_user_info($first, $last, $email, $username, $password,
                            $password_confirmation) {
  $errors = '';

  // verify character counts
  if (strlen($first) > 25) 
    $errors .= "First Name too long! (Max 25 chars)\n";
  if (strlen($last) > 25) 
    $errors .= "Last Name too long! (Max 25 chars)\n";
  if (strlen($email) > 50) 
    $errors .= "Email too long! (Max 50 chars)\n";
  if (strlen($username) > 30) 
    $errors .= "Username too long! (Max 30 chars)\n";

  // verify email is valid
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    $errors .= "Invalid email\n";

  // verify passwords match
  if ($password !== $password_confirmation) 
    $errors .= "Passwords do not match\n";

  // return error messages or the value false
  return $errors === '' ? false : $errors;
}

// validates product fields
function validate_product_info($name, $desc, $price) {
  $errors = '';

  // verify character counts
  if (strlen($name) > 30) 
    $errors .= "Name too long! (Max 30 chars)\n";

  // return error messages or the value false
  return $errors === '' ? false : $errors;
}

// return option with included default if needed
function option($val, $name, $default) {
  $selected = $name === $default ? 'selected="selected"' : '';
  return "<option value=\"$val\" $selected>$name</option>\n";
}
