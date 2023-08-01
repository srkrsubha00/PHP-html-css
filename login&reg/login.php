<?php
    include("database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form action="login.php" method = "post">
    <center>Welcome to My Website</center>
    <center>
        <label>Username</label>
        <input type="text" name ="username"><br>
        <label>Password</label>
        <input type="password" name ="password"><br>
        <input type="submit" name="login" value="login">
        <a href="registration.php">New User?</a>
    </center>
    </form>
</body>
</html>

<?php

        

        if(isset($_POST["login"])){
            $uname=$_POST["username"];
            $pass=$_POST["password"];
            if(!empty($_POST["username"])
                && !empty($_POST["password"])){
            $sql = "SELECT * FROM users WHERE username = '$uname'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if($num==0){
                    echo "User does not exist<br>";
            }
            else{
                $row=mysqli_fetch_assoc($result);
                    $hpass = $row["password"];

                    if(password_verify($pass,$hpass)){
                        session_start();
                        $_SESSION["username"] = $uname;
                        $_SESSION["loggedin"] = true;
                        header("Location: home.php");
                    }
                    else{
                        echo "Wrong password!";
                    }
            }
                }
                else{
                    echo "Please enter username and password both";
                }
        }
?>