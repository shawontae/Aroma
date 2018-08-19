<?php 

$connection = mysqli_connect('localhost','root','','aroma');
	if(!$connection){
		die("Database Connection Failed.");
	}