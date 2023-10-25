<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<a href="details.php" class="btn btn-info w-100">Details</a>
<form action="conn.php" method="post" class="mt-2">

<label for="firstName">First Name:</label>
<input type="text" name="first_name" class="form-control" id="firstName">
<br>
<label for="lastName">Last Name:</label>
<input type="text" name="last_name" class="form-control" id="lastName">
<br>
<label for="emailAddress">Email Address:</label>
<input type="text" name="email" class="form-control" id="emailAddress">
<br>
<input type="submit" class="btn btn-primary" value="Submit">
</form>
</div>
</body>
</html>