<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
<h1>Halaman Login</h1>
<?php if (isset($error)) :?>
	<p style="color : red; font-style: italic;">username / password salah</p>
<?php endif; ?>

<form action="api/api_login.php" method="post">
	<ul>
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="login">Login</button>
		</li>
	</ul>
</form>

</body>
</html>