<?php
  include("database.php");

   /*   $username ="avijit";
    $pass = "sarkar1998";
    $hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) 
                        VALUES('$username','$hash')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Successfully inserted";
    }

*/

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    
    $num= mysqli_num_rows($result);

    if($num>0){
            while($row = mysqli_fetch_assoc($result)){ 
            echo $row["no."]."<br>";
            echo $row["username"]."<br>";
            echo $row["password"]."<br>";
            echo $row["reg.date"]."<br>";
            }
    }

?>

