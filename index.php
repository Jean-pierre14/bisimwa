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
        ?>
        <form action="" method="get">
            <div class="group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</body>

</html>