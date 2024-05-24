<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    
<body style="background-color:darkgray ; display:flex; align-content: center; justify-content: center; ">
<?php
$conn = mysqli_connect("localhost", "root", "", "scratcher");
if ($conn === false) {
    die("ERROR: Could not connect" . mysqli_connect_error());
} else {
    echo ("");
}
?>
    <div>
        <div style="width: 40rem;height: 40rem;background-color: white;display: flex;align-items: center;flex-direction: column;">
            <img style="height: 20% ;width: 40%;padding: 20px;" src="../img/TODAY-LOGO.png" alt="">
            <div style="display: flex;">
                <form action="./checkInput.php" method="post" style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                    <div style="display: flex;align-items: center;">

                        <p style="font-size: 21px ;margin-right: 12px;">Pin Number: </p>
                        <input name="pinCode" id="pinCode" style="padding: 12px; border-radius: 12px; width: 20rem;margin: 0;" type="text">
                    </div>
                    <div style="padding: 12px;">

                    </div>
                        <button type="submit" style="width: 30rem; height: 3rem;border-radius: 12px;color: white; font-weight: bold;; background-color: #D1202D;">
                        Submit
                    </button>
                </form>
            </div>

            
        </div>
 
    </div>
    
</body>
</html>