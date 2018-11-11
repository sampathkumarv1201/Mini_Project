<?php  ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Event Details</h2>
  </div>
	 
  <form method="post" action="server.php">
  	<div class="input-group">
  		<label>Name of the Event</label>
  		<input type="text" name="name" >
		</div>
		<div class="input-group">
  		<label>Chief Guest</label>
  		<input type="text" name="cheafgust">
  	</div>
  	<div class="input-group">
  		<label>Venue</label>
  		<input type="text" name="place">
		</div>
		<div class="input-group">
  		<label>Category</label>
  		<input type="text" name="category">
  	</div>
  	<div class="input-group">
  		<label>Date</label>
  		<input type="text" name="date">
		</div>
		<div class="input-group">
  		<label>Start Time</label>
  		<input type="text" name="starttime">
		</div>
		<div class="input-group">
  		<label>Contact No</label>
  		<input type="text" name="mobile">
		</div>
		<div class="input-group">
  		<label>Contact Email</label>
  		<input type="text" name="email">
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="submit">Submit</button>
  	</div>
  </form>
</body>
</html>