<?php
function windowShopper($item) {
  include 'partials/windowShopper.php';
}

function itemWindow($item) {
  include 'partials/itemWindow.php';
}

function smallWindow($item) {
  include 'partials/smallWindow.php';
}

function itemAdmin($id, $item) {
  include 'partials/itemAdmin.php';
}

function itemForm($id, $item = []) {
  include 'partials/itemForm.php';
}
