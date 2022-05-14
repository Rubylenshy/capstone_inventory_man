<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "capstone_login";

if(!$connect = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
	die("failed to connect!");
}