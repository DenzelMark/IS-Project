<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}else{
    
    $title = $_POST['title'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    $content = $_POST['content'];
    $link = $_POST['link'];
  


    $sql="INSERT INTO `customers`( `title`) VALUES ( '$title')";

    if(mysqli_query($conn, $sql)){
        echo ("");
      
    }else{
        echo "something went wrong";
       
    }
}

?>















