<?php
session_start();
//fetch_comment.php
$subject=$_SESSION['subject'];
$connect = new PDO('mysql:host=localhost;dbname=Forum', 'root', '');

$query = "
SELECT * FROM data_structures 
WHERE parent_comment_id = '0' and type='".$subject."' 
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
  <div class="panel-body">'.$row["comment"].'</div>
  <div class="panel-footer" align="left"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Like '.$row["liked"].'</button>
        <button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Dislike '.$row["disliked"].'</button>
            <button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM data_structures WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
    <div class="panel-body">'.$row["comment"].'</div>
    <div class="panel-footer" align="left"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Like '.$row["liked"].'</button>
        <button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Dislike '.$row["disliked"].'</button>
            <button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>
