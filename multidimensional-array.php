<?php
$arr=[
    [1,"sid","raj"],
    [2,"sk","raj"],
    [3,"dk","raj"],
    [4,"lk","raj"],
];
for($i=0;$i<count($arr);$i++){
    for($j=0;$j<count($arr[$i]);$j++){
        echo $arr[$i][$j]." ";
    }
    echo "<br>";
}
echo "<br>";
foreach($arr as $i){
    foreach($i as $j){
        echo $j." ";
    }
    echo "<br>";
}
?>