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


//create a connection

$conn=mysqli_connect($servername,$username,$password);

//Die if connection was not successful

if(!$conn){
    die("sorry we failed to connect:" . mysqli_connect_error());
}
echo "connection was successful ";
?>