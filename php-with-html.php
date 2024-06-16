<?php

//normal php
$name= "sid<br/>";
echo $name;

//html in php
echo "<h1>$name</h1>";

//php in html is done outside php syntax
?>

<h2><?php echo $name ?></h2>

<?php

//we can make as many php tag we want
echo "<h3 style=color:green>$name</h3>";

//we can use variable to use color while using php in html
$color="blue";
?>

<h3 style="color:<?php echo $color ?>"><?php echo $name;?></h3>