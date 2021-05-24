<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your result</title>
</head>
<body>
    
</body>
</html>


<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "dbtutorial";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed error: ".mysqli_connect_error());
}

$q = $_GET['q'];
$sql = "select * from employee where E_ID='".$q."'";

$result = mysqli_query($conn,$sql);

echo "<table align = 'center' border=1 cellspacing=5>";

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["E_ID"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["Age"]."</td>";
        echo "<td>".$row["Contact"]."</td>";
        echo "<td>".$row["Email"]."</td>";
        echo "</tr>";
    }
}else {
    echo "No Result Found In The Database.";
}

mysqli_close($conn);


?>