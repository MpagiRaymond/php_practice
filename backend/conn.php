<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpwd = "";
$dbname = "votes";

$conn = new mysqli($dbservername, $dbusername, $dbpwd, $dbname);

if($conn-> connect_error){
    die("Connection problem: ".$conn->connection_error);
}