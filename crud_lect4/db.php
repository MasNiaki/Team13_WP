<?php
$servername="db";
$username="app2";
$password="masoud";
$dbname ="app2";
// creating connection 
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
    die("Connection failed: ".$conn->connect_error);
?>