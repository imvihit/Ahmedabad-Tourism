<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	$_SESSION['login']="xx";
	$_SESSION['access']="xx";
	unset($_SESSION['login']);
	unset($_SESSION['access']);
		session_destroy();

	header('Location:log_in.php');	
?>
</body>
</html>
