<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>

	<h1>FORM</h1>

	<form action="<?php echo site_url('form/showform');?>" method="post">
		name : <input type="text" name="name" required="" placeholder="name">
		<br>
		laname : <input type="text" name="lname" required="" placeholder="lastname">
		<br>
		<button type="submit">save</button>
	</form>

</body>
</html>