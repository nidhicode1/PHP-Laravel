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


//create a DB

$sql = "CREATE DATABASE dbprac";
$result=mysqli_query($conn,$sql);

// check for the database creation success

if($result){
    echo" DB created";
}
else{
    echo" DB not created".mysqli_error($conn);
}

echo "the result is";
echo"<br>";

echo "the result is" . var_dump($result);

//Die if connection was not successful

if(!$conn){
    die("sorry we failed to connect:" . mysqli_connect_error());
    echo"<br>";

}
else{
    echo "connection was successful ";
}
?>