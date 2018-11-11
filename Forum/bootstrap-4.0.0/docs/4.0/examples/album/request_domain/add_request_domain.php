<?php


// initializing variables
$requestdomainname = "";
$desc    = "";
$reason    = "";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Forum');

// REGISTER USER

  // receive all input values from the form
  $requestdomainname = mysqli_real_escape_string($db, $_POST['requestdomainname']);
  $desc = mysqli_real_escape_string($db, $_POST['desc']);
  $reason = mysqli_real_escape_string($db, $_POST['reason']);
  


  


  
  	
  	$query = "INSERT INTO request_domain (requestdomainname,discription,reason) 
  			  VALUES('$requestdomainname', '$desc', '$reason')";
      mysqli_query($db, $query);
      


     

  	
  	header('location: view_all_request_domain.php');
  
 

