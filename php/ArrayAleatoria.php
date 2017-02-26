<?php
$formato = array("Html","Css","python","C++","JavaScript","Php","MYSQL","Lua");
$rand=array_rand($formato,6);
echo $formato[$rand[0]]."<br>";
echo $formato[$rand[1]]."<br>";
echo $formato[$rand[2]]."<br>";
echo $formato[$rand[3]]."<br>";
echo $formato[$rand[4]]."<br>";
echo $formato[$rand[5]];
 ?>
