<?php
function greetUser($name) {
  return "Hello, $name!";
}

// Check for AJAX request
if (isset($_POST['name'])) {
  $response = greetUser($_POST['name']);
  echo $response;
  exit();
}
?>