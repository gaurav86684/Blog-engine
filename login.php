<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<h1>LOGIN</h1>
	<form action ="action.php" method="post">
		<div class="tbox">
			<input type="email" placeholder="@username" value="" name="email">
		</div>
	    <div class="tbox">
		    <input type="password" placeholder="password" value="" name="pss">
	    </div>
	    <input class="btn" type="submit" name="" value="Submit">
	</form>
	<a class="b1" href="#">FORGOT PASSWORD</a>
	<a class="b2" href="http://localhost:8080/cya.php">CREATE AN ACCOUNT</a>
</body>
</html>