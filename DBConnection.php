<?php
	include 'ChromePHP/ChromePhp.php';
	$hostname_DBconn = "localhost";
	$database_DBconn = "HorarioDALUM";
	$username_DBconn = "root";
	$password_DBconn = "aftermath00";
	$DBconn = mysql_pconnect($hostname_DBconn, $username_DBconn, $password_DBconn) or trigger_error(mysql_error(),E_USER_ERROR); 
	mysql_select_db($database_DBconn) or die(mysql_error());
?>