<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>

    <link rel="icon" href="../img/TODAY-LOGO.png">
</head>

<body style="width: 100%;;background-color:darkgray ; display:flex; align-content: center; justify-content: center; ">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "scratcher");
    if ($conn === false) {
        die("ERROR: Could not connect" . mysqli_connect_error());
    } else {
        echo ("");
    }
    ?>
    <div>
        <div style="overflow-x: hidden;width: 100%;height: 40rem;background-color: white;display: flex;align-items: center;flex-direction: column;">
            <img style="height: 20% ;width: 60%;padding: 20px;" src="../img/TODAY-LOGO.png" alt="">
            <div style="display: flex;">
                <form action="./checkInput.php" method="post" style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                    <div style="display: flex;align-items: center;justify-content: center;">

                        <p style="font-size: 21px ;margin-right: 4px;">Pin Number: </p>
                        <input name="pinCode" required id="pinCode" style="padding: 12px; border-radius: 12px; width: 40%;margin: 0;" type="text">
                    </div>
                    <div style="padding: 12px;">
                        <div>

                            <?php
                            if (isset($_GET['error'])) {
                            ?>
                                <p style='color: #D1202D;'><?php echo $_GET['error'] ?></p>
                            <?php

                            }
                            ?>
                        </div>
                        <script>

                        </script>
                    </div>
                    <button onclick='confirmInput()' type="submit" style="width:80%; height: 3rem;border-radius: 12px;color: white; font-weight: bold;; background-color: #D1202D;">
                        Submit
                    </button>
                </form>
            </div>


        </div>

    </div>

</body>

</html>