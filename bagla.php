<?php
  try {
    $mydb = new mysqli("localhost", "root", "", "pizza");
    if ($mydb->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mydb->connect_errno . ") " . $mydb->connect_error;
    }
  } catch (\Exception $e) {
   die($e);
  }
?>
