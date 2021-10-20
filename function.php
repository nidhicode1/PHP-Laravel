<?php
echo"tutorial on function";

function processMarks($marksArr){
    $sum=0;
    foreach ($marksArr as  $value) {
        $sum += $value;

    }
    return $sum;
}

function avgMarks($marksArr){
    $sum=0;
    $i=0;
    foreach ($marksArr as  $value) {
        $sum += $value;
        $i++;

    }
    return $sum/$i;
}
$nidhi=[35,67,87,98,56];
$sumMarks=processMarks($nidhi);
$marksavg=avgMarks($nidhi);
echo"total marks is $sumMarks";
echo "avg marks is $marksavg ";

?>