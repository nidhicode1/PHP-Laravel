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

$sql="SELECT * FROM phptrp WHERE dest='china'";

$result=mysqli_query($conn,$sql);

//find the no.of records return

//usage of where clause

$num= mysqli_num_rows($result);
echo $num;
echo"<BR>";

$no=1;
if($num>0){
while($row=mysqli_fetch_assoc($result)){
    echo $no." "."hello" ." ". $row['name'] ." ". "welcome to" ." ". $row[ 'dest'] ;
    echo"<br>";
    $no=$no+1;
}
}

//update query
$sql = "UPDATE phptrp SET name = 'mohan' WHERE dest='china' ";
$result=mysqli_query($conn,$sql);
echo var_dump($result);

$aff=mysqli_affected_rows($conn);

echo "<br> number of affected rows:$aff";
if($result){
    echo "we updated the record successfully";

}

else{
    echo "we could not update the record successfully";
}

?>
