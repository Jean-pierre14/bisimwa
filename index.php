<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <div style="color: blue">
        <h2>Registration</h2>

        <?php
            echo "Cool PHP";
            $a = "ULK";

            $con = mysqli_connect("localhost", "root", "", "ulk_db");
        ?>
        <h2>Welcome to <?php echo $a;?></h2>

        <?php
            if($con){
                echo "You'r connected";
            }else{
                echo "You're not connected";
            }
        ?>
        
        <?php
            $select = mysqli_query($con, "SELECT * FROM student");
            // echo var_dump($select);
            // echo json_encode($select);

            // $row = mysqli_fetch_array($select);

            // echo json_encode($row);
        ?>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Events</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($select)):?>
                <tr>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['username'];?></td>
                    <td><?= $row['email'];?></td>
                    <td>Actions</td>
                </tr>
                <?php endwhile;?>
            </tbody>
        </table>
        <?php
            if(isset($_POST['register'])){
                $insert =  mysqli_query($con, "INSERT INTO student(username, email) VALUES('".$_POST['username']."','".$_POST['email']."')");

                if($insert){
                    echo 'Register';
                }else{
                    echo 'Failed';
                }
            }
        ?>
        <form action="" method="post">
            <div class="group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="group">
                <button type="submit" name="register">Register</button>
            </div>
        </form>
    </div>
</body>

</html>