<?php
// // while loops
// $i=0;
// while($i<=5){
//     echo $i;
//     echo "<br>";
//     $i+=2;
// }


//for loop


// for($i=0;$i<5;$i++){
//     echo "the num is $i <br>";
// }

// for ($i=0; $i < ; $i++) { 
//     # code...
// }

//do  while
// $i=0;
// do {
//     echo "$i <br>";
//     $i++;
// }while($i<=5);


//foreach loop
$arr=array("apple","banana","oranges","grapes");
for ($i=0; $i < count($arr); $i++) {
    echo $arr[$i];
    echo"<br>";
    # code...
}


//better way
foreach ($arr as $value) {
    echo "$value<br>";
}

?>