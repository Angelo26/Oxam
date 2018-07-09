<?php
session_start();

// variable declaration
$username = "";
$pass = "";
$errors = array(); 
$_SESSION['success'] = "";

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
// REGISTER USER
if (isset($_POST['admin-hook'])) {
    // receive all input values from the form
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $pass = mysqli_real_escape_string($db, $_POST['pass']);


    // register user if there are no errors in the form
        if (count($errors) == 0) {
            if($username == "admin" && $pass == "admin"){
                header('location: ../pages/admin-hook.html');
            }
            else
                echo 'Who the hell are you?';
        }
}
