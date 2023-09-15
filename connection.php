<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "news";
$connection = new mysqli($server,$username,$password,$dbname);
if($connection->connect_error)
{
    die("connection failed ".$connection->connect_error);
}
?>