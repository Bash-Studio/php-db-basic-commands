<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="5; URL= ./edit.html" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "dbtutorial";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed error: ".mysqli_connect_error());
}

$a = $_POST["idd"];


$sql="delete from employee where E_ID='".$a."'";

if(mysqli_query($conn,$sql)){

    echo "User with id $a has been deleted from database!";
}else{
    echo "Something went wrong please try deleting after sometime!";
}

mysqli_close($conn);

?>
</body>
</html>