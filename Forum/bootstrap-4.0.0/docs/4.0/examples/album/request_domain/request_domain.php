<?php ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="add_request_domain.php">
  	<?php ?>
  	<div class="input-group">
  		<label>Requesting domain name</label>
  		<input type="text" name="requestdomainname" required >
  	</div>
  	<div class="input-group">
  		<label>Description</label>
  		<input type="textarea" name="desc" required>
  	</div>
  	<div class="input-group">
  		<label>reason</label>
  		<input type="textarea" name="reason" >
  	</div>

  	<div class="input-group">
			<button type="submit" class="btn" name="login_user">Submit</button>
			<button type="submit" class="btn" name="login_user" onclick="history.back()">Back</button>
		</div>
  	
  	<p id ="demo"></p>
  </form>
</body>
</html>