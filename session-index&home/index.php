<?php
        session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    
</head>
<body>
    <form action="index.php" method= "post">
        <label>username: </label>
        <input type="text" name = "username"><br>
        <label>password: </label>
        <input type="password" name = "password"><br>
        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])){

        if(!empty($_POST["username"])&&
            !empty($_POST["password"])){

                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];

                header("Location: home.php");
            }
            else{
                echo "Please enter the username and the password correctly.";
            }
    }
?>

