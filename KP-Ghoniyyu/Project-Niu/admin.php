<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Admin Page</title>
</head>

<body>
	<div class="button-back">
		<a href="indexx.php"><img src="basil_logout-solid.png" alt=""></a>
	</div>
	<div class="container">
		<form action="validate.php" method="post">
			<div class="login-box">
				<h1>Login</h1>

				<div class="textbox">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" placeholder="Username" name="username" value="">
				</div>

				<div class="textbox">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" placeholder="Password" name="password" value="">
				</div>

				<input class="button" type="submit" name="login" value="Login">
			</div>
		</form>
	</div>
</body>

</html>