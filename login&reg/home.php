<?php
    session_start();
    if(!($_SESSION["loggedin"])){
        header("Location:login.php");
    }
?>
<?php
       $username = $_SESSION["username"];
       echo "Hello $username <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <form action="home.php" method = "post">
    <center>This is the home page.</center>
    <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    if(isset($_POST["logout"])){
        $_SESSION["loggedin"]= false;
        session_unset();
        session_destroy();
        header("Location:login.php");
    }
?>