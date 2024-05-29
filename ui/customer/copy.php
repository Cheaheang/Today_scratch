
    <img id='redux' src='../img/sratcher.jpg' />
                        <p id="robot" style="display: flex; align-items: center ;  justify-content: center;font-size:50px ;">
                            <?php
                            $code  = $_GET['userInput'];
                            $reward;
                            $result = $conn->query("SELECT * FROM `user` WHERE pinCode = $code");
                            $row = $result->fetch_assoc();
                            $pinCode = $row["pinCode"];
                            $reward = $row['reward'];
                            echo $reward . " Bandwidth", $value, PHP_EOL;
                            ?>
                        </p>