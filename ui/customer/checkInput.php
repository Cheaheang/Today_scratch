<?php

$conn = mysqli_connect("localhost", "root", "", "scratcher");
if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
} else {
    echo ("");
}




$UserInput = $_REQUEST["pinCode"];
$result = $conn->query("SELECT * FROM `user`");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        if ($UserInput == $row["pinCode"] && $row["onePass"]=='1') {
            return header("location: ./card.php?userInput=$UserInput");
        }
    }
}
header("location: ./pinCode.php");
