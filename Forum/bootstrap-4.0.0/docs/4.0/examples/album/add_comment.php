<?php
session_start();
//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=Forum', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';


 $comment_name =$_SESSION['username'];

 
$subject=$_SESSION['subject'];
 
if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO data_structures 
 (parent_comment_id, comment, comment_sender_name,type) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name,:type)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':type' => $subject
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>