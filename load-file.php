<?php
//include
for($i=0;$i<5;$i++){
    include("./hello-world.php");
    echo "<br>";
}
echo "<br>";

//include_once
for($i=0;$i<5;$i++){
    include_once("./hello-world.php");
    echo "<br>";
}
echo "<br>";

//require
for($i=0;$i<5;$i++){
    require("./hello-world.php");
    echo "<br>";
}
echo "<br>";

//require_once
for($i=0;$i<5;$i++){
    require_once("./hello-world.php");
    echo "<br>";
}
echo "<br>";
?>