<?php
//string
$str="it is a string";
echo $str;
echo "<br>";
echo var_dump($str);
echo "<br>";

//integer
$int=10;
echo $int;
echo "<br>";
echo var_dump($int);
echo "<br>";

//float
$flt=1.1;
echo $flt;
echo "<br>";
echo var_dump($flt);
echo "<br>";

//bool
$bool=true;
echo $bool;
echo "<br>";
echo var_dump($bool);
echo "<br>";

//null
$nl=NULL;
echo $nl;
echo "<br>";
echo var_dump($nl);
echo "<br>";

//array
$ar1=array("abc","def",10);
$ar2=["ABC","def",10];
echo var_dump($ar1);
echo "<br>";
echo var_dump($ar2);
?>