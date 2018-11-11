<?php
session_start();
//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=Forum', 'root', '');

$query = "
SELECT * FROM events 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '

<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {onclick="history.back()"
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: blue;
  margin: auto;
    width: 45%;
    border: 3px solid blue;
    padding: 10px;
  
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
</style>
</head>
<body bgcolor="#E6E6FA">

<h1><center onclick="history.back()" >Events</center></h1>


';
foreach($result as $row)
{
 $output .= '
 
<div class="grid-container">
  <div class="grid-item"><b> '.$row["name"].'</b></br><b>Date Of The Event : </b>'.$row["date"].'
  </br><b>Category  : </b>'.$row["Category"].'
  </br><b>Place Of The Event : </b>'.$row["place"].'</br><b>Chiefguest Of The Event : </b>'.$row["cheafgust"].'</br><b>Starttime Of The 
      Event :</b> '.$row["starttime"].'</br><b>Contact Number :</b> '.$row["contact_mobile"].'</br><b>Contact Email : </b>'.$row["contact_email"].'</div>
</div>




';
 
}
$output .= '</body>
</html>

 ';
echo $output;


?>
