<?php
session_start();

// variable declaration
$fname = "";
$lname = "";
$gender = "";
$username = "";
$a1 = "";$a2 = "";$a3 = "";$a4 = "";$a5 = "";$a6 = "";$a7 = "";$a8 = "";$a9 = "";$a10 = "";
$a11 = "";$a12 = "";$a13 = "";$a14 = "";$a15 = "";$a16 = "";$a17 = "";$a18 = "";$a19 = "";$a20 = "";
$a21 = "";$a22 = "";$a23 = "";$a24 = "";$a25 = "";$a26 = "";$a27 = "";$a28 = "";$a29 = "";$a30 = "";
$a31 = "";$a32 = "";$a33 = "";$a34 = "";$a35 = "";$a36 = "";$a37 = "";$a38 = "";$a39 = "";$a40 = "";
$a41 = "";$a42 = "";$a43 = "";$a44 = "";$a45 = "";$a46 = "";$a47 = "";$a48 = "";$a49 = "";$a50 = "";
$a51 = "";$a52 = "";$a53 = "";$a54 = "";$a55 = "";$a56 = "";$a57 = "";$a58 = "";$a59 = "";$a60 = "";
$a61 = "";$a62 = "";$a63 = "";$a64 = "";$a65 = "";$a66 = "";$a67 = "";$a68 = "";$a69 = "";$a70 = "";
$a71 = "";$a72 = "";$a73 = "";$a74 = "";$a75 = "";$a76 = "";$a77 = "";$a78 = "";$a79 = "";$a80 = "";
$a81 = "";$a82 = "";$a83 = "";$a84 = "";$a85 = "";$a86 = "";$a87 = "";$a88 = "";$a89 = "";$a90 = "";
$a91 = "";$a92 = "";$a93 = "";$a94 = "";$a95 = "";$a96 = "";$a97 = "";$a98 = "";$a99 = "";$a100 = "";
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

//LOGIN SECTION
// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
        $fname = mysqli_real_escape_string($db, $_POST['fname']);
        $lname = mysqli_real_escape_string($db, $_POST['lname']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $gender = mysqli_real_escape_string($db, $_POST['gender']);

    // form validation: ensure that the form is correctly filled

        if (empty($fname)) { array_push($errors, "First name is required"); }
        if (empty($lname)) { array_push($errors, "Last name is required"); }
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($gender)) { array_push($errors, "Gender is required"); }

    // register user if there are no errors in the form
        if (count($errors) == 0) {
            $query = "INSERT INTO register (fname,lname,username,gender) 
                        VALUES('$fname','$lname','$username','$gender')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            echo 'You are now logged in.';
        }
}






//Exam Section
//Insert data & Answered Values Into Database
if (isset($_POST['ans_ques'])) {

    // receive all input values from the form
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $a1 = mysqli_real_escape_string($db, $_POST['a1']);
    $a2 = mysqli_real_escape_string($db, $_POST['a2']);
    $a3 = mysqli_real_escape_string($db, $_POST['a3']);
    $a4 = mysqli_real_escape_string($db, $_POST['a4']);
    $a5 = mysqli_real_escape_string($db, $_POST['a5']);
    $a6 = mysqli_real_escape_string($db, $_POST['a6']);
    $a7 = mysqli_real_escape_string($db, $_POST['a7']);
    $a8 = mysqli_real_escape_string($db, $_POST['a8']);
    $a9 = mysqli_real_escape_string($db, $_POST['a9']);
    $a10 = mysqli_real_escape_string($db, $_POST['a10']);
    $a11 = mysqli_real_escape_string($db, $_POST['a11']);
    $a12 = mysqli_real_escape_string($db, $_POST['a12']);
    $a13 = mysqli_real_escape_string($db, $_POST['a13']);
    $a14 = mysqli_real_escape_string($db, $_POST['a14']);
    $a15 = mysqli_real_escape_string($db, $_POST['a15']);
    $a16 = mysqli_real_escape_string($db, $_POST['a16']);
    $a17 = mysqli_real_escape_string($db, $_POST['a17']);
    $a18 = mysqli_real_escape_string($db, $_POST['a18']);
    $a19 = mysqli_real_escape_string($db, $_POST['a19']);
    $a20 = mysqli_real_escape_string($db, $_POST['a20']);
    $a21 = mysqli_real_escape_string($db, $_POST['a21']);
    $a22 = mysqli_real_escape_string($db, $_POST['a22']);
    $a23 = mysqli_real_escape_string($db, $_POST['a23']);
    $a24 = mysqli_real_escape_string($db, $_POST['a24']);
    $a25 = mysqli_real_escape_string($db, $_POST['a25']);
    $a26 = mysqli_real_escape_string($db, $_POST['a26']);
    $a27 = mysqli_real_escape_string($db, $_POST['a27']);
    $a28 = mysqli_real_escape_string($db, $_POST['a28']);
    $a29 = mysqli_real_escape_string($db, $_POST['a29']);
    $a30 = mysqli_real_escape_string($db, $_POST['a30']);
    $a31 = mysqli_real_escape_string($db, $_POST['a31']);
    $a32 = mysqli_real_escape_string($db, $_POST['a32']);
    $a33 = mysqli_real_escape_string($db, $_POST['a33']);
    $a34 = mysqli_real_escape_string($db, $_POST['a34']);
    $a35 = mysqli_real_escape_string($db, $_POST['a35']);
    $a36 = mysqli_real_escape_string($db, $_POST['a36']);
    $a37 = mysqli_real_escape_string($db, $_POST['a37']);
    $a38 = mysqli_real_escape_string($db, $_POST['a38']);
    $a39 = mysqli_real_escape_string($db, $_POST['a39']);
    $a40 = mysqli_real_escape_string($db, $_POST['a40']);
    $a41 = mysqli_real_escape_string($db, $_POST['a41']);
    $a42 = mysqli_real_escape_string($db, $_POST['a42']);
    $a43 = mysqli_real_escape_string($db, $_POST['a43']);
    $a44 = mysqli_real_escape_string($db, $_POST['a44']);
    $a45 = mysqli_real_escape_string($db, $_POST['a45']);
    $a46 = mysqli_real_escape_string($db, $_POST['a46']);
    $a47 = mysqli_real_escape_string($db, $_POST['a47']);
    $a48 = mysqli_real_escape_string($db, $_POST['a48']);
    $a49 = mysqli_real_escape_string($db, $_POST['a49']);
    $a50 = mysqli_real_escape_string($db, $_POST['a50']);
    $a51 = mysqli_real_escape_string($db, $_POST['a51']);
    $a52 = mysqli_real_escape_string($db, $_POST['a52']);
    $a53 = mysqli_real_escape_string($db, $_POST['a53']);
    $a54 = mysqli_real_escape_string($db, $_POST['a54']);
    $a55 = mysqli_real_escape_string($db, $_POST['a55']);
    $a56 = mysqli_real_escape_string($db, $_POST['a56']);
    $a57 = mysqli_real_escape_string($db, $_POST['a57']);
    $a58 = mysqli_real_escape_string($db, $_POST['a58']);
    $a59 = mysqli_real_escape_string($db, $_POST['a59']);
    $a60 = mysqli_real_escape_string($db, $_POST['a60']);
    $a61 = mysqli_real_escape_string($db, $_POST['a61']);
    $a62 = mysqli_real_escape_string($db, $_POST['a62']);
    $a63 = mysqli_real_escape_string($db, $_POST['a63']);
    $a64 = mysqli_real_escape_string($db, $_POST['a64']);
    $a65 = mysqli_real_escape_string($db, $_POST['a65']);
    $a66 = mysqli_real_escape_string($db, $_POST['a66']);
    $a67 = mysqli_real_escape_string($db, $_POST['a67']);
    $a68 = mysqli_real_escape_string($db, $_POST['a68']);
    $a69 = mysqli_real_escape_string($db, $_POST['a69']);
    $a70 = mysqli_real_escape_string($db, $_POST['a70']);
    $a71 = mysqli_real_escape_string($db, $_POST['a71']);
    $a72 = mysqli_real_escape_string($db, $_POST['a72']);
    $a73 = mysqli_real_escape_string($db, $_POST['a73']);
    $a74 = mysqli_real_escape_string($db, $_POST['a74']);
    $a75 = mysqli_real_escape_string($db, $_POST['a75']);
    $a76 = mysqli_real_escape_string($db, $_POST['a76']);
    $a77 = mysqli_real_escape_string($db, $_POST['a77']);
    $a78 = mysqli_real_escape_string($db, $_POST['a78']);
    $a79 = mysqli_real_escape_string($db, $_POST['a79']);
    $a80 = mysqli_real_escape_string($db, $_POST['a80']);
    $a81 = mysqli_real_escape_string($db, $_POST['a81']);
    $a82 = mysqli_real_escape_string($db, $_POST['a82']);
    $a83 = mysqli_real_escape_string($db, $_POST['a83']);
    $a84 = mysqli_real_escape_string($db, $_POST['a84']);
    $a85 = mysqli_real_escape_string($db, $_POST['a85']);
    $a86 = mysqli_real_escape_string($db, $_POST['a86']);
    $a87 = mysqli_real_escape_string($db, $_POST['a87']);
    $a88 = mysqli_real_escape_string($db, $_POST['a88']);
    $a89 = mysqli_real_escape_string($db, $_POST['a89']);
    $a90 = mysqli_real_escape_string($db, $_POST['a90']);
    $a91 = mysqli_real_escape_string($db, $_POST['a91']);
    $a92 = mysqli_real_escape_string($db, $_POST['a92']);
    $a93 = mysqli_real_escape_string($db, $_POST['a93']);
    $a94 = mysqli_real_escape_string($db, $_POST['a94']);
    $a95 = mysqli_real_escape_string($db, $_POST['a95']);
    $a96 = mysqli_real_escape_string($db, $_POST['a96']);
    $a97 = mysqli_real_escape_string($db, $_POST['a97']);
    $a98 = mysqli_real_escape_string($db, $_POST['a98']);
    $a99 = mysqli_real_escape_string($db, $_POST['a99']);
    $a100 = mysqli_real_escape_string($db, $_POST['a100']);

    //input if there are no errors in the form
    //Store the user information
    if (count($errors) == 0) {
        $query = "INSERT INTO register (fname,lname,username,gender) 
            VALUES('$fname','$lname','$username','$gender')";
        mysqli_query($db, $query);
            }
    
    if (count($errors) == 0) {
        $query = "INSERT INTO ans (fname,lname,username,gender,
            a1,a2,a3,a4,a5,a6,a7,a8,a9,a10,
            a11,a12,a13,a14,a15,a16,a17,a18,a19,a20,
            a21,a22,a23,a24,a25,a26,a27,a28,a29,a30,
            a31,a32,a33,a34,a35,a36,a37,a38,a39,a40,
            a41,a42,a43,a44,a45,a46,a47,a48,a49,a50,
            a51,a52,a53,a54,a55,a56,a57,a58,a59,a60,
            a61,a62,a63,a64,a65,a66,a67,a68,a69,a70,
            a71,a72,a73,a74,a75,a76,a77,a78,a79,a80,
            a81,a82,a83,a84,a85,a86,a87,a88,a89,a90,
            a91,a92,a93,a94,a95,a96,a97,a98,a99,a100
                )
        VALUES('$fname','$lname','$username','$gender',
            '$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10',
            '$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20',
            '$a21','$a22','$a23','$a24','$a25','$a26','$a27','$a28','$a29','$a30',
            '$a31','$a32','$a33','$a34','$a35','$a36','$a37','$a38','$a39','$a40',
            '$a41','$a42','$a43','$a44','$a45','$a46','$a47','$a48','$a49','$a50',
            '$a51','$a52','$a53','$a54','$a55','$a56','$a57','$a58','$a59','$a60',
            '$a61','$a62','$a63','$a64','$a65','$a66','$a67','$a68','$a69','$a70',
            '$a71','$a72','$a73','$a74','$a75','$a76','$a77','$a78','$a79','$a80',
            '$a81','$a82','$a83','$a84','$a85','$a86','$a87','$a88','$a89','$a90',
            '$a91','$a92','$a93','$a94','$a95','$a96','$a97','$a98','$a99','$a100'
            )";
        mysqli_query($db, $query);

        header('location: ../index.html');
    }
}

?>


