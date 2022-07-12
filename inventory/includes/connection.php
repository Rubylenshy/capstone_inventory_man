<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "group37_inventory";

if(!$connect = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
	die("failed to connect!");
}

