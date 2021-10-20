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
//variable to be inserted into the table

$name="nishant";
$destination="russia";


$sql="INSERT INTO `phptrp` ( `name`, `dest`) VALUES ('$name', '$destination')";
// $sql="INSERT INTO `phptrp` (`s.no`, `name`, `dest`) VALUES ('2', 'rohan', 'china')";

$result=mysqli_query($conn,$sql);

if($result){
    echo " record has been inserted successfully";
}
else{
    echo"the record was not inserted successsfuly".mysqli_error($conn);
    echo"<BR>";

}
$sql="SELECT * FROM phptrp";
$result=mysqli_query($conn,$sql);
//find the no.of records return

$num= mysqli_num_rows($result);
echo $num;
echo"<BR>";

//display the rows returned by the query

// if($num>0){
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo"<BR>";

    //better way

while($row=mysqli_fetch_assoc($result)){
    echo $row['s.no']." "."hello" ." ". $row['name'] ." ". "welcome to" ." ". $row[ 'dest'] ;
    echo"<br>";
}



?>

?>