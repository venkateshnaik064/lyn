<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "content_management";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Failed to connect!");
}