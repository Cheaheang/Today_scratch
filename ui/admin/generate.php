<?php
$conn = mysqli_connect("localhost", "root", "", "scratcher");
if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
} else {
    echo ("successful");
}


$result = $conn->query("SELECT * FROM `user`");



$reward = $_REQUEST['reward'];
$qty = $_REQUEST['qty'];

$range = 8;
for ($i = 0; $i < $qty; $i++) {
    $pinCode = rand();
    try {

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row['pinCode'];
                if ($pinCode == $row['pinCode']) {

                    while ($pinCode == $row['pinCode']) {
                        $pinCode = rand();
                    }
                }
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $query = "INSERT INTO `pin-code`(`reward`, `pinCode`) VALUES ('$reward', '$pinCode')";
    $conn->query($query);
}

header("location: ./adminPage.php");
