<?php


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "event";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn){
    die("can not connect".mysqli_connect_error());
}

$title = $_POST["title"];
$content = $_POST["content"];
$location = $_POST["location"];
$date = $_POST["date"];
$link = $_POST["link"];


$sql = "INSERT INTO contact(title, content, location, date, link) 
VALUES 
('$title', '$content', '$location', '$date', '$link')";

if(mysqli_query($conn, $sql)){
    echo ("Data added successfully");

}else{
    echo "something went wrong";
}

?>