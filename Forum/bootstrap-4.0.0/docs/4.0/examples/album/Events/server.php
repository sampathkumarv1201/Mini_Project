<?php


// initializing variables
$name = "";
$place    = "";
$cheafgust    = "";
$starttime = "";
$date    = "";
$mobile    = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Forum');

// REGISTER USER

  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $place = mysqli_real_escape_string($db, $_POST['place']);
  $cheafgust = mysqli_real_escape_string($db, $_POST['cheafgust']);
  $category = mysqli_real_escape_string($db, $_POST['category']);
  $starttime = mysqli_real_escape_string($db, $_POST['starttime']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $email = mysqli_real_escape_string($db, $_POST['email']);



  


  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM events WHERE name='$name'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user[name] === $name) {
        array_push($errors,"Eventname already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO events (name,date,place,cheafgust, starttime,contact_mobile,contact_email,Category) 
  			  VALUES('$name', '$date', '$place', '$cheafgust', '$starttime', '$mobile', '$email','$category')";
  	mysqli_query($db, $query);

  	$_SESSION['success'] = "You are now logged in";
  	header('location: add_events.php');
  }
 

