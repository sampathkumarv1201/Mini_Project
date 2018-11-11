<?php  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Delete Events</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Delete Events</h2>
  </div>
	 
  <form method="post" action="delete.php">
  	<div class="input-group">
  		<label>Name of the Event</label>
  		<input type="text" name="name" >
		</div>
		

  	<div class="input-group">
  		<button type="submit" class="btn" name="submit">Submit</button>
  	</div>
  </form>
</body>
</html>