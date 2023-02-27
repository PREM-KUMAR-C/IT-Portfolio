<!--
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Template Name: Shakthi - Portfolio Admin
*/
-->

<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','itportfolio');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>

<?php
	//for MySQLi OOP
	$conn = new mysqli('localhost', 'root', '', 'itportfolio');
	if($conn->connect_error){
	   die("Connection failed: " . $conn->connect_error);
	}
?>