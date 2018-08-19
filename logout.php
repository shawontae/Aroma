<?php 
include 'includes/includes.php';
include 'includes/dbh-inc.php';

session_start();
session_unset();
if(session_destroy()){
	header("Location: index.php");	
	exit();
}else{
	echo "Session is still running!";
}


?>

