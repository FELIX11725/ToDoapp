<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "todo_app";

$conn =mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);


if(!$conn){
    die("Connection failed:" . mysqli_error());
}