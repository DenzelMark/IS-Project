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
    <link rel="stylesheet" href="css/Login.css">
</head>
<body>
    
    <h1>ChatRoom</h1>
    <div class="login">

        <h2>Login</h2>

        <p>Welcome to the strathmore mental health chat app</p>

    <form action="db.php" method="post">


        <h3>userName</h3>
        <input type="text" placeholder="Short Name" name="name">

        <h3>Mobile No:</h3>
        <input type="number" placeholder="with country code" min="1111111"
        max="9999999999999999" name="phone">

        <button>Login/ register</button>
        
    </form>
    </div>
   
</body>
</html>
 