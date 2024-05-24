 <?php
$host = "localhost";
$username  = "root";
$password = "";
$db = "scratcher";

$connect = new mysqli($host, $username, $password, $db);
if ($connect->connect_error) {
    die("Error Connect to DB" . $connect->connect_error);
}
$code = '';
$username = '';
$identityId = '';
$code = $_GET['pincode'];
$username = $_REQUEST['username'];
$identityId = $_REQUEST['identityId'];

try{ 
    
    $sql = "UPDATE `user` SET `userName`='$username',`identityId`='$identityId',`onePass`='0' WHERE `pinCode`= '$code'";
    $result = $connect->query($sql); 
}catch(Exception $e){
    echo $e->getMessage();
    exit;
}
 
header("location: ./pinCode.php");
 