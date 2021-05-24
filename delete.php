<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <form action="maindelete.php" method="POST">

<?php

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "dbtutorial";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed error: ".mysqli_connect_error());
}

$a = $_POST["id"];

$sql = "select * from employee where E_ID='".$a."'";

$result = mysqli_query($conn,$sql);

echo "<table align = 'center' border=1 cellspacing=5>";

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

        echo "<tr><td>ID: </td><td><input type='text' name='idd' value='".$row["E_ID"]."'></td></tr>";
        echo "<tr><td>Name: </td><td><input type='text' name='name' value='".$row["Name"]."'></td></tr>";
        echo "<tr><td>Age: </td><td><input type='text' name='age' value='".$row["Age"]."'></td></tr>";
        echo "<tr><td>Contact: </td><td><input type='text' name='contact' value='".$row["Contact"]."'></td></tr>";
        echo "<tr><td>Mail: </td><td><input type='text' name='mail' value='".$row["Email"]."'></td></tr>";

    }
echo "<tr><td><input type='submit' value='Delete'</td></tr>";
echo "</table>";
}else{
    echo "No Result Found In The Database.";
}

mysqli_close($conn);

?>
</form>
</body>
</html>