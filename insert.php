<?php
//connecting to the database
$servername = "localhost";
$username="root";
$password="";
$database="dbprac";

$conn=mysqli_connect($servername,$username,$password,$database);

//die if not connected
if(!$conn){
    die("sorry we failed to connect:" . mysqli_connect_error());
}
else{
    echo "connection was successful ";
}    

$name="vikrant";
$destination="america";


$sql="INSERT INTO `phptrp` ( `name`, `dest`) VALUES ('$name', '$destination')";
// $sql="INSERT INTO `phptrp` (`s.no`, `name`, `dest`) VALUES ('2', 'rohan', 'china')";

$result=mysqli_query($conn,$sql);

if($result){
    echo " inserted successfully";
}
else{
    echo"not inserted successsfuly".mysqli_error($conn);
}

?>