<?php
$conn = mysqli_connect("localhost", "root", "", "scratcher");
if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
} else {
    echo ("successful");
}

// function uniqidReal($lenght = 13) {
//     // uniqid gives 13 chars, but you could adjust it to your needs.
//     if (function_exists("random_bytes")) {
//         $bytes = random_bytes(ceil($lenght / 2));
//     } elseif (function_exists("openssl_random_pseudo_bytes")) {
//         $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
//     } else {
//         throw new Exception("no cryptographically secure random function available");
//     }
//     return substr(bin2hex($bytes), 0, $lenght);
// }

$reward = $_REQUEST['reward'];
$qty = $_REQUEST['qty'];

$range = 8;
for ($i = 0; $i < $qty; $i++) {
    $pinCode=rand();
    
    $query = "INSERT INTO `pin-code`(`reward`, `pinCode`) VALUES ('$reward', '$pinCode')";
    $conn->query($query);
}

header("location: ./adminPage.php");
