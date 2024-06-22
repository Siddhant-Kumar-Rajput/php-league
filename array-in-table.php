<?php 
$arr=[
    [1,"sid","raj"],
    [2,"lk","raj"],
    [3,"ak","raj"],
    [4,"dk","raj"],
];
echo "<table border=1>";
echo "<tr><td>S.no</td><td>f_name</td><td>l_name</td></tr>";
foreach($arr as $i){
    echo "<tr>";
    foreach($i as $j){
        echo "<td>";
        echo $j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>