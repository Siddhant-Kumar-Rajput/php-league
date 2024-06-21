<?php 
$arr=["s.no"=>1,"f_name"=>"sid","l_name"=>"raj"];
foreach($arr as $key=>$data){
    echo $key." is ".$data."<br>";
}


$keys = array_keys($arr);
for ($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    $value = $arr[$key];
    echo "$key is $value<br>";
}
?>