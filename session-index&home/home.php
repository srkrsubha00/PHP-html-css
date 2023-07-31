<?php
    session_start();
?>
<?php
       $username = $_SESSION["username"];
       $pass = $_SESSION["password"];
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
    <form action="home.php" method="post">
    <p>Welcome to the home page.</p>
    <input type="submit" name="logout" value ="logout">
    </form>
</body>
</html>

<?php
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location:index.php");
    }
?>


