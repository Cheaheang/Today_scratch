 
    <?php 
        $conn = mysqli_connect("localhost","root","","scratcher");
        if($conn === false){
            die("ERROR: Could not connect".mysqli_connect_error());
        
        } else {
            echo("successful");
        }

            if(isset($_GET['pincode'])){
                if(isset($_GET['reward'])){

                    $id = $_GET['pincode'];
                    $reward = $_GET['reward'];
                    $query = "DELETE FROM `pin-code` WHERE pincode=$id";
                    $query2 = "INSERT INTO `user`(`reward`, `pinCode`,`onePass`) VALUES ('$reward', '$id','1')";
                    $conn->query($query);
                    $conn->query($query2);
                }
            }
            
            
        header("location: ./adminPage.php");
        


    ?> 