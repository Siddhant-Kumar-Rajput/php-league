<?php 
$arr=[
    ["s.no"=>1,"f_name"=>"sid","l_name"=>"raj"],
    ["s.no"=>2,"f_name"=>"sk","l_name"=>"raj"],
    ["s.no"=>3,"f_name"=>"dk","l_name"=>"raj"],
];
foreach($arr as $i){
    foreach($i as $key=>$j){
        echo $key." is ".$j." ";
    }
    echo "<br>";
}

echo "<table border=1>";
echo "<tr>";
foreach(array_keys($arr[0]) as $header){
    echo "<th>" .$header. "</th>";
}
echo "</tr>";
$key=array_keys($arr);
foreach($arr as $i){
    echo "<tr>";
    foreach($i as $key=>$j){
        echo "<td>";
        echo $j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>