<?php

//associative arrray

// $favCol=array('Ravi'=> 'red',"rohan"=>"pink","Himanshu"=>"green");

// echo $favCol['prank'];
// echo"<br>";
// foreach ($favCol as $key => $value) {
//     echo "$key is $value <br>";
//     # code...
// }


// // Multidimensional array

$multiDim=array(array(2,3,4,5,),
                array(1,5,7,8),
                array(4,7,8,8),
                array(1,1,4,3));
// echo var_dump($multidim);
// echo"<br>";

// echo $multidim[1][2];
// echo"<br>";


for ($i=0; $i <count($multiDim) ; $i++) {
    for ($j=0; $j <count($multiDim) ; $j++) {
        echo $multiDim[$i][$j]; 
        echo " ";
    }
    echo "<br>";
   
    # code...
}

// 3_d array

threeD=array(array(array(2,4,5),array(4,5,6)))

?>