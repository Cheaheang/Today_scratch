<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reward</title>
    <link rel="stylesheet" href="./card.css">
    <link rel="icon" href="../img/TODAY-LOGO.png">
</head>
<style>
    .condition {
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<body style="background-color: darkgray;display: flex;justify-content: center;align-items: center;  ">
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
    <!-- <script src="npm_service.js"></script> -->
    <script>
        function data() {
            const canvas = document.getElementById('custom_canvas')
            const button = document.getElementById('button')

            const jsConfetti = new JSConfetti({
                canvas
            })

            setTimeout(() => {
                jsConfetti.addConfetti()
            }, 500)

            button.addEventListener('click', () => {
                jsConfetti.addConfetti()
            })
        }
    </script>
    <script src='http://code.jquery.com/jquery-3.6.1.min.js' type='text/javascript'></script>
    <script src='jquery.eraser.js'></script>
    <?php
    // sleep(3);
    $conn = mysqli_connect("localhost", "root", "", "scratcher");
    if ($conn === false) {
        die("ERROR: Could not connect" . mysqli_connect_error());
    } else {
        echo ("");
    }

    ?>
    <div style="width: 40rem;height: 40rem;background-color: white;display: flex;flex-direction: column;justify-content: center;align-items: center;">
        <img style="height: 20% ;width: 50%;padding: 20px;" src='../img/TODAY-LOGO.png' alt="">
        <div style="display: flex;">
            <?php
            $code = $_GET['userInput']
            ?>
            <form action=<?php echo "update.php?pincode=$code" ?> method="post" style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                <div>
                    <p style="font-size: 21px ;margin-right: 12px;">Name : </p>
                    <input name="username" required id="username" style="padding: 12px; border-radius: 12px; width: 90%;margin: 0;" type="text">

                    <p style="font-size: 21px ;margin-right: 12px;">Identity Number : </p>
                    <input name="identityId" required id="identityId" maxlength="9" style="padding: 12px; border-radius: 12px; width: 90%;margin: 0;" type="text">
                </div>

                <div>

                    <span class="container">
                        <div class="condition" style="background-image: url('../img/sratcher_smaller.jpg');">
                            <img id='redux' src='../img/sratcher.jpg' />

                        </div>
                        <p id="robot" style="display: flex; align-items: center ;  justify-content: center;font-size:50px ;">
                            <?php
                            sleep(1);
                            $code  = $_GET['userInput'];
                            $reward;
                            $result = $conn->query("SELECT * FROM `user` WHERE pinCode = $code");
                            $row = $result->fetch_assoc();
                            $pinCode = $row["pinCode"];
                            $reward = $row['reward'];
                            ?>
                        </p>

                    </span>
                </div>
                <div style="padding-top: 21px;">

                </div>
                <?php echo "
                <button onclick='confirmInput()' id='button' role='button' type='submit' style='width: 90%; height: 3rem;border-radius: 12px;background-color: #D1202D; color: white; font-weight: bold;'>
                Submit
                </button>
                " ?>
            </form>
        </div>


    </div>


    <script>
        <?php
        // $name =$_REQUEST['username'];
        // $identityId = $_REQUEST['identityId']
        ?>

        function confirmInput() {
            var result = confirm("Is the input correct?")
            if (result = false) {
                event.preventDefault();
            }
        }
    </script>
    <script type="text/javascript">
        // $(function() {
        //     $('#redux').eraser({
        //         // completeRatio: .7,
        //         // completeFunction: data(),
        //         progressFunction: function(p) {
        //             $('#progress').html(Math.round(p * 100) + '%');
        //         }
        //     });
        // });
        // $('#redux').eraser();

        // $('#redux').eraser('disable');

        $('#redux').eraser({
            completeRatio: 70,
            completeFunction: data()
        });
    </script>
    <script>
    </script>
    <script>
        const blurredImageDiv = document.querySelector(".blurred-img")
        const img = blurredImageDiv.querySelector("img")

        function loaded() {
            blurredImageDiv.classList.add("loaded")
        }

        if (img.complete) {
           console.log(

           <?php  
            echo $reward . " Mbps";
            ?>
           );
        } else {
            img.addEventListener("load", loaded)
        }
    </script>
    <script type="text/javascript" src="./wScratchPad.min.js">

    </script>
</body>

</html>