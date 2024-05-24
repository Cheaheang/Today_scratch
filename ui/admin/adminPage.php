<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/input.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./activate.css">

</head>

<body style="background-color:darkgray ; display:flex; align-content: center; justify-content: center; ">
    <?php
    // include("../php/conn.php") 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "scratcher";
    $conn = new mysqli($hostname, $username, $password, $databasename);
    if ($conn->connect_error) {
        die("connection failed : " . $conn->connect_error);
    }
    //sql query
    $query = "SELECT * FROM `user`";
    ?>
    <div>
        <div style="width: 40rem;height: 40rem;background-color: white;display: flex;align-items: center;flex-direction: column">

            <img style="height: 30% ;width: 40%;padding: 20px;" src="../img/TODAY-LOGO.png" alt="">
            <h1 style="padding: 12px;">AdminPage</h1>
            <div style="display: flex;">
                <form action="generate.php" method="POST">
                    <div style="display: flex;align-items: center;">
                        <div style="margin-right: 12px;display: flex;">

                            <p style="font-size: 16px ;margin-right: 12px;">Reward : </p>
                            <!-- <input  type="text"> -->
                            <select style="padding: 6px; border-radius: 12px; width: 8rem;margin: 0;" name="reward" , id="reward" name="" id="">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                            </select>
                        </div>
                        <div style="margin-left: 12px; display: flex;">

                            <p style="font-size: 16px ;margin-right: 12px;">Quatity : </p>
                            <input required style="padding: 6px; border-radius: 12px; width: 8rem;margin: 0;" name="qty" id="qty" type="text">
                        </div>

                    </div>

            </div>
            <div style="padding: 12px;"> </div>
            <button type="submit" style="width: 30rem; height: 3rem;border-radius: 12px; background-color: #D1202D;color: white;font-weight: bold;">
                <a href="./generate.php?reward"></a>
                Generate code
            </button>
            </form>

            <div style="height: 3rem;"> </div>
            <div class="table-responsive">
                <table class="table" style="width: 30rem;">
                    <thead class="table-danger">
                        <tr>
                            <h2>

                                Reward Pin-code

                            </h2>
                        </tr>
                        <tr>

                            <th scope="col" colspan="3">No.</th>
                            <th scope="col" colspan="3">Pin-code</th>
                            <th scope="col" colspan="3">Option</th>

                        </tr>
                        <tr class="table-primary">
                            <?php
                            $result = $conn->query("SELECT * FROM `pin-code` ORDER BY pincode ASC");
                            if ($result->num_rows > 0) {
                                $no = 1;
                                while ($row = $result->fetch_assoc()) {
                            ?>
                        <tr>
                            <td colspan="3" style="vertical-align: center;"><?php echo $no;
                                                                            $no++ ?></td>
                            <td colspan="3"><?php echo $row["pincode"]; ?></td>
                            <td colspan="3">
                                <?php
                                    echo
                                    "
                                <button class='deleteButton'> 
                                <a href='./activate.php?pincode=$row[pincode]&reward=$row[reward]' style='color: white;background-color: red;padding:0px;
                                text-decoration: none;'> 
                                Activate
                                </a>
                                </button>
                                "
                                ?>
                            </td>
                        </tr>
                <?php

                                }
                            } else {
                                echo "0 result";
                            }
                ?>

            </div>


        </div>

    </div>
    <div>


        <div class="table-responsive">
            <table class="table" style="width: 30rem;">
                <thead class="table-danger">
                    <tr>
                        <h2>Customer reward</h2>
                    </tr>
                    <tr>
                        <th scope="col" colspan="5">No.</th>
                        <th scope="col" colspan="5">Pin Code</th>
                        <th scope="col" colspan="5">Name</th>
                        <th scope="col" colspan="5">Identity ID</th>
                        <th scope="col" colspan="5">Reward</th>

                    </tr>
                    <tr class="table-primary">
                        <?php
                        $result = $conn->query("SELECT * FROM `user` ORDER BY pinCode ASC");
                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) {
                        ?>
                    <tr>
                        <td colspan="5" style="vertical-align: center;"><?php echo $no;
                                                                        $no++ ?></td>
                        <td colspan="5"><?php echo $row["pinCode"]; ?></td>
                        <td colspan="5"><?php echo $row["userName"]; ?></td>
                        <td colspan="5"><?php echo $row["identityId"]; ?></td>
                        <td colspan="5"><?php echo $row["reward"]; ?></td>
                    </tr>
            <?php

                            }
                        } else {
                            echo "0 result";
                        }
            ?>

        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>