<?php 
//array
$arr=[1,"sid","raj"];
foreach($arr as $i){
    echo $i." ";
}
echo "<br>";

//add element
array_push($arr,"abc@test.com");
foreach($arr as $i){
    echo $i." ";
}
echo "<br>";

//remove element
array_pop($arr);
foreach($arr as $i){
    echo $i." ";
};

?>