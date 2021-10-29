<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


</head>
<body>

<div id="container">
	<h1>Hello world</h1>
	<p>OL()</p>
	<?php
	$list =array('a','b','c');
	echo ol($list);

	echo '<hr>';
	echo ul($list);

	?>

	<hr>
	<h1>HTML Helper</h1>
	<p>br()</p>
	aaaaa 
	<?php echo br(5);?>
	bbbbbbbb
	<hr>
	<p>HEADING()</p>
	<?php echo heading("TEXT",1);?>
	<?php echo heading("TEXT",2);?>
	<?php echo heading("TEXT",3);?>
	<?php echo heading("TEXT",4);?>
	<?php echo heading("TEXT",5);?>
	<?php echo heading("TEXT",6);?>
	<hr>
	<p>nbs()</p>
	poramin&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jumphom
	<br>
	<?php
echo 'mywebsite';
echo nbs(10);
echo 'PORAMIN';
	?>


</body>
</html>