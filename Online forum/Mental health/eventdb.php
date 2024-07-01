<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Event";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}else{
    
    $img = $_FILES["img"];
    $title = $_POST["title"];
    $date = $_POST["date"];
    $location = $_POST["location"];
    $content = $_POST["content"];
    $link = $_POST["link"];
  


    $sql="INSERT INTO `users`( `message`) VALUES ( '$message',
    '$title', '$date', '$location', '$content', '$link')";

    if(mysqli_query($conn, $sql)){
        echo ("<script>alert('Your message has been sent');</script>");
      
    }else{
        echo "something went wrong";
       
    }
}