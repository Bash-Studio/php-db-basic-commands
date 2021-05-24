<?php

$servername="localhost";
$username="root";
$password="";
$dbname="dbtutorial";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed error: ".mysqli_connect_error());
}

$a = $_POST["uid"];
$b = $_POST["name"];
$c = $_POST["age"];
$d = $_POST["con"];
$e = $_POST["mail"];

$sql = "insert into employee values ('".$a."','".$b."','".$c."','".$d."','".$e."')";

if(mysqli_query($conn,$sql)){
echo "Record inserted successfully!";
}else{
echo "Error :".$sql."<br>".mysql_error($conn);
};

mysqli_close($conn);

?>

