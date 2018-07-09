<?php
session_start();


// Database Variable Declaration
$servername = "localhost";
$username = "oxam";
$password = "";

// Create connection
$db = mysqli_connect($servername, 'root', '', $username);	
 
// Check connection
  if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


//Insert Data Into Database
if (isset($_POST['options'])) {





}