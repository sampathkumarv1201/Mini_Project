<?php


// initializing variables
$name = "";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Forum');

// REGISTER USER

  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
 

  


  
  $user_check_query = "DELETE FROM events WHERE name='$name'";
  $result = mysqli_query($db, $user_check_query);
  
  
  

  	header('location: delete_events.php');
  
 
