<?php

echo "connecting to database";
echo"<br>";

/*//ways to connect to database
1. MSQLi extension
2. PDO

*/
$servername = "localhost";
$username="root";
$password="";
$database="dbprac";


//create a connection

$conn=mysqli_connect($servername,$username,$password,$database);


//create a DB

$sql = "CREATE DATABASE dbprac1";
$result=mysqli_query($conn,$sql);
//Die if connection was not successful

if(!$conn){
    die("sorry we failed to connect:" . mysqli_connect_error());
}
echo "connection was successful ";


$sql="CREATE TABLE `dbprac1`.`phptrp` ( `s.no` INT(6) NOT NULL , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(8) NOT NULL ) ";
$result=mysqli_query($conn,$sql);
if($result){
    echo" DB created";
}
else{
    echo" DB not created".mysqli_error($conn);
}


?>