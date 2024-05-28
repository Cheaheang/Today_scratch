<?php

$checkStatus = false;

$conn = mysqli_connect("localhost", "root", "", "scratcher");
if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
} else {
    echo ("");
}



$role = $_REQUEST['role'];
$pin = $_REQUEST['pin_number'];
$pin_an = 22032003;
echo $role;
echo $pin;
        if ($role == 'customer' && $pin == $pin_an) {
            return header("location: ./adminPage.php");
    }
$error = 'Invalid role and password';
header("location: ./authentication.php?error=$error");
exit();