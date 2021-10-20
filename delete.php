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

$sql="DELETE FROM phptrp WHERE dest='russia' LIMIT 5";

$result=mysqli_query($conn,$sql);

$aff=mysqli_affected_rows($conn);

echo "<br> number of affected rows:$aff";
if($result){
    echo"deleted successfully";

}
else{
    $err=mysqli_error($conn);
    echo"<br> not deleted due to this error---> $err";

}
?>