<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chatRoom";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: ". mysqli_connect_error());
}else{
    $user= $_POST["name"];
    $phone= $_POST["phone"];
  


    $sql="INSERT INTO `users`(`name`, `phone`) VALUES ('$user', '$phone')";

    if(mysqli_query($conn, $sql)){
        echo ("");
      
    }else{
        echo "something went wrong";
       
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatRoom</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>ChatRoom</h1>
    <div class="chat">
        <h2>Welcome to <span><?= $_SESSION["user"]?></span></h2>
        <div class="msg">
 
          

        </div>
        <div class="input_msg">
            <input type="text" placeholder="type here...">
            <button>Send</button>
        </div>
    </div>
</body>
</html>


