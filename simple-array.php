<?php 
//2 methods to create array
$arr=array(1,"sid","raj");
$arr1=[1,"sid","raj"];

for($i=0;$i<count($arr);$i++){
    echo $arr[$i]." ";
}
echo "<br>";

foreach($arr1 as $i){
    echo $i." ";    
}
?>