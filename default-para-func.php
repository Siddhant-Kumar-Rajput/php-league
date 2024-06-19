<?php 
function def_fun($fruit, $color="red"){
    echo "The color of $fruit is <span style='color:$color'>$color</span>";
}
$fruit = "apple";
def_fun($fruit);
?>
