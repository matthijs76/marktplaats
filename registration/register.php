<?php 
include('functions.php') 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registratie nieuwe gebruiker</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps|Roboto" rel="stylesheet">
</head>
<body>
<div class="header">
	<h2>Registreer</h2>
</div>
<form method="post" action="register.php">
<?php echo display_error(); ?>
	<div class="input-group">
		<label>Gebruikersnaam</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Bevestig password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Registreer</button>
	</div>
	<p>
		Ben je al lid? <a href="login.php">Klik hier</a>
	</p>
</form>
</body>
</html>