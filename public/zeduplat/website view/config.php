<?php
define('DBSERVER', 'localhost');
define('DBUSERNAME','root');
define('DBPASSWORD', '');
define('DBNAME', 'zeduplat');

$db = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

if($db === false){
	die("Error: connection error. " . mysqli_connect_error());
	}
?>