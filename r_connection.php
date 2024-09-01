<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "rectors_login";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}