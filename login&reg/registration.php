<?php
    include ("database.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
</head>
<body>
    <form action="registration.php" method="post">
<center>Register for New User</center>
    <center>
        <label>Username</label>
        <input type="text" name ="username"><br>
        <label>Password</label>
        <input type="password" name ="password"><br>
        <label>Confirm Password</label>
        <input type="password" name ="cpassword"><br>
        <input type="submit" name="register" value="register">
        <a href="login.php">Go to Login!</a>
    </center>
    </form>
</body>
</html>

<?php
    $username = null;
    if(isset($_POST["register"])){
        if(empty($_POST["username"])||empty($_POST["password"])||empty($_POST["cpassword"])){
            echo "Please fill all the fields.";
        }
        else{
        $username =$_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num>0){
            echo "Sorry! username already exists.<br>";
        }
        else{
            if($_POST["password"]==$_POST["cpassword"]){
                $hash = password_hash($password,PASSWORD_DEFAULT);
                $sql2 = "INSERT INTO users(username,password) 
                                    VALUES('$username','$hash')";
                $result2 = mysqli_query($conn,$sql2);
                if($result2){
                    echo "User registered successfully! <br>";
                }
                else{
                    echo"Registration failed! <br>";
                }
            }
            else{
                echo "Password and confirm password did not match! <br>";
            }
        }
    }
}
?>