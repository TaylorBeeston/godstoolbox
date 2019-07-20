<?php function loginForm($username = '') {
  include 'partials/login.php';
}

function signupForm() {
  include 'partials/signup.php';
}

function validateLogin($username, $password) {
  if ($username == 'admin' && $password == 'admin') { return true; }
  if ($username == 'publisher' && $password == 'publisher') { return true; }
  if ($username == 'customer' && $password == 'customer') { return true; }
  return false;
}

function badCredentials() {
  include 'partials/badCredentials.php';
}
