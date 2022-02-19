<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-color: Black;
            color: #A7F7C0;
            font-size: 35px;
            margin-left: 600px;
        }
        h2 {
            margin-left: -50px;
        }
        a {
            margin-left: 150px;
        }
    </style>    
</head>
<body>
            <?php include 'config.php' ;
            $username= $_POST['username'];
            $passwords= $_POST['passwords'];
            if (empty($_POST['username'])) {
                echo "<h1>Please input username</h1>";
            } 
                else {
            $sql="insert into Login (username, passwords)
            values('$username', '$passwords')";

            if($conn->query($sql) === TRUE) {
                echo "<h1>GameFence</h1>";
                echo "<br>";
                echo "<br>";
                echo "<h2>You are now logged in</h2>";
                echo "<br>";
                echo "<br>";
                echo "<a href='login.php' class='top'>Login Page</a>";
            }
            else
            {
                echo "ERROR: " .$sql. "<br>" . $conn->error;
            }
            $conn->close();

            }

            ?>
</body>
</html>


