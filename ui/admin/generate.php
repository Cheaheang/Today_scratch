<?php
$conn = mysqli_connect("localhost", "root", "", "scratcher");
if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
} else {
    echo ("successful");
}
$reward = $_REQUEST['reward'];
$qty = $_REQUEST['qty'];

$range = 8;
for ($i = 0; $i < $qty; $i++) {
    $pinCode=rand();
    
    $query = "INSERT INTO `pin-code`(`reward`, `pinCode`) VALUES ('$reward', '$pinCode')";
    $conn->query($query);
}

header("location: ./adminPage.php");
