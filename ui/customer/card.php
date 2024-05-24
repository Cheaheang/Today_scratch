<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./card.css">
</head>
<style>
</style>

<body style="background-color: darkgray;display: flex;justify-content: center;align-items: center;  ">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "scratcher");
    if ($conn === false) {
        die("ERROR: Could not connect" . mysqli_connect_error());
    } else {
        echo ("");
    }

    // if(!$row){
    //     die("error get data");
    // }

    // echo "<h1 id='robot' > $reward</h1>";


    ?>
    <div style="width: 40rem;height: 40rem;background-color: white;display: flex;flex-direction: column;justify-content: center;align-items: center;">
        <img style="height: 20% ;width: 40%;padding: 20px;" src='../img/TODAY-LOGO.png' alt="">
        <div style="display: flex;">
            <?php
            $code = $_GET['userInput']
            ?>
            <form action=<?php echo "update.php?pincode=$code" ?> method="post" style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                <div>
                    <p style="font-size: 21px ;margin-right: 12px;">Name : </p>
                    <input name="username" required id="username" style="padding: 12px; border-radius: 12px; width: 20rem;margin: 0;" type="text">

                    <p style="font-size: 21px ;margin-right: 12px;">Identity Number : </p>
                    <input name="identityId" required id="identityId" maxlength="9" style="padding: 12px; border-radius: 12px; width: 20rem;margin: 0;" type="text">
                </div>
               
                <div>

                    <span class="container">
                        <img id="redux" src="../img/sratcher.jpg" />
                        <p id="robot" style="display: flex; align-items: center ;  justify-content: center;font-size:100px ;">
                            <?php
                            $code  = $_GET['userInput'];
                            $reward;
                            // $name = '';
                            // $id ='';
                            // $name = $_REQUEST['username'];
                            // $id = $_REQUEST['identityId'];
                            $result = $conn->query("SELECT * FROM `user` WHERE pinCode = $code");
                            $row = $result->fetch_assoc();
                            $pinCode = $row["pinCode"];
                            $reward = $row['reward'];

                            echo $reward . "$";
                            ?>
                        </p>
                    </span>
                </div>
                <div style="padding-top: 21px;">

                </div>
                <!-- <script src="confirmDialog.js"></script> -->
                <?php echo "
                <button id='button' role='button' type='submit' style='width: 30rem; height: 3rem;border-radius: 12px;background-color: #D1202D; color: white; font-weight: bold;'>
                Submit
                </button>
                " ?>
            </form>
        </div>
        <!-- <canvas id="custom_canvas"></canvas> -->


    </div>


    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    <script src="npm_service.js"></script> 
    <script src='http://code.jquery.com/jquery-3.6.1.min.js' type='text/javascript'></script>
    <script src='jquery.eraser.js' ></script>
    <script type="text/javascript">
        $(function() {
            $('#redux').eraser({
                progressFunction: function(p) {
                    $('#progress').html(Math.round(p * 100) + '%');

                }

            });
            // $('#robot').eraser({

            //     completeRatio: 165,
            //     completeFunction: progress console.log('heaheang');

            // });

        });

    </script>
</body>

</html>