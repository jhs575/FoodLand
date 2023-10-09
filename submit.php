<?php

// print_r($_POST);

$Name = $_POST['name'];
$Email =$_POST['mail'];
$Msg = $_POST['msg'];

// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tasktable";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//INSERT INTO `tasktable`(`Name`, `Email`, `Msg`) VALUES ('[value-2]','[value-3]','[value-4]')

$sql = "INSERT INTO `tasktable`(`Name`, `Email`, `Msg`) VALUES ('$Name','$Email','$Msg')";


// Database Insert

if (mysqli_query($conn, $sql)) {
    echo "Inserted Sucesfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi, <?= $Name; ?></h1>
    <h2>Message: <?=$Msg ?></h2>
</body>
</html>