 <!-- //scope -->
 <?php
 $b=45; //global varable

 function printValue(){
     $a=97; //local variable
     global $a , $b; //give me the acess of this global variable
     echo $a,$b;
 }

 echo $a;
 
 
 printValue();
 ?>