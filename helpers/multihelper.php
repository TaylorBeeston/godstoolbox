<?php if (session_status() == PHP_SESSION_NONE) { session_start(); }
  include '../helpers/database.php';
  include '../helpers/query_makers.php';
  include '../helpers/includes.php';
  include '../helpers/forms.php';
