<?php
$name="today is too cold";
echo"$name";
echo"<br>";
//strlen()
echo"the len of string is". strlen($name);
echo"<br>";

//str_word_count()
echo str_word_count($name);
echo"<br>";

//string reverse

echo strrev($name);
echo"<br>";

//searching position

echo strpos($name,'too');
echo"<br>";

//replace
echo str_replace("cold",'hot',$name);
echo"<br>";

//repeat

echo str_repeat("cold",3);
echo"<br>";

//trim fun
echo"<pre> ";
echo rtrim("  this is good   ");
echo"<br>";
echo ltrim("  this is good   ");
echo"</pre> ";


// operators


?>