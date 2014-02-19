<?php
$email='kalys';
$password='123456';
if( $_POST["email"] || $_POST["password"]  )
{
	if ($_POST["email"]==$email && $_POST["password"]==$password)
		header("Location: http://localhost://lesson/index.html"); else header("Location: http://localhost://lesson/authorization.html");
	exit();
}
?>
