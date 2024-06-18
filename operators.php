<h2>OPERATORS IN PHP</h2>
<h1>ARITHEMATIC OP</h1>
<?php 
$a=20;
$b=10;
echo "a+b = ".$a+$b." <br/>";
echo "a-b = ".$a-$b." <br/>";
echo "a*b = ".$a*$b." <br/>";
echo "a/b = ".$a/$b." <br/>";
echo "a%b = ".$a%$b." <br/>";
echo "a**b = ".$a**$b." <br/>";
?>
<h1>ASSIGNMENT OP</h1>
<?php
$x=10;
$y=20;
echo "value of x = $x and value of y = $y <br/>";
echo "x=y, then x = $y<br/>";
?>
<h1>COMPARISON OP</h1>
<?php 
$e=10;
$f=20;
$g="10";
echo "== <br/>";
var_dump($e==$f);
echo "<br/>=== <br/>";
var_dump($e==$f);
echo "<br/>!= <br/>";
var_dump($e!=$f);
echo "<br/> <> <br/>";
var_dump($e<>$f);
echo "<br/>!== <br/>";
var_dump($e!==$g);
?>
<h1>INCREMENT/DECREMENT</h1>
<?php
$a=10;
$b=10;
echo "a = ".$a." and b = ".$b." <br/>a++ give ".$a++." and ++a give ".++$a." <br/>b++ give ".$b++." and ++b give ".++$b;
?>
