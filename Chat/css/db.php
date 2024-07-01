<?php


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "chatRoom";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn){
    die("can not connect".mysqli_connect_error());
}




$sql = "INSERT INTO users(firstname, lastname, email, phone, message) 
VALUES 
('$firstname', '$lastname', '$email', '$phone', '$message')";

if(mysqli_query($conn, $sql)){
    echo ("Data added successfully");

}else{
    echo "something went wrong";
}

?>