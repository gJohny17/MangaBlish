<?php

$host = 'localhost';
$user = 'root';
$pw = '';
$database = 'mangablish';

$con=mysqli_connect($host,$user,$pw,$database);
if(!$conn){
	
	die("Failed to Establish Database Connection");

}
	//connected database