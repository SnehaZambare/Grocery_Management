<?php
require_once("constants.php");
//start connection
$connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
if(!$connect){
	die("Database connection Error".mysql_error());
	}
//select database
// $db = mysql_select_db(DB_NAME);
// if(!$db){
// 	die("Database selection Error".mysql_error());
// 	}	
 ?>