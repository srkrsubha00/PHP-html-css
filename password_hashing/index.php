<?php
$password =  "letsgo";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash ;

if(password_verify($password,$hash)){
    echo "Correct password";
}
else{
    echo "Incorrect passoword";
}

?>