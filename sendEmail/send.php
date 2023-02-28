<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Send-Email</title>
	<style>
		body{
			width: 1200px;
			margin: 100px auto;
			font-family: Arial;
		}
		input{
			padding: 7px 10px;
		}
	</style>
</head>
<body>
	<h1>Email-Login-Page</h1>
	<form action="email.php" method="post">
		<label for="email">Enter your email</label><br>
		<input type="text" name="email" required><br><br>
		<input type="submit">
	</form>
</body>
</html>