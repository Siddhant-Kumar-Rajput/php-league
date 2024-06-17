<?php
// constant defined by const
const data="used const<br/>";
echo data;
?>

<?php
// constant defined by define
define("DATA","used define<br/>");
echo DATA;
?>

<?php
//try to change const
//echo data="try to change";
//giev error:Parse error: syntax error, unexpected token "="

//try to show const in another php tag
echo data;
?>

<?php
//try to change define
// echo DATA="try to change";
//giev error:Parse error: syntax error, unexpected token "="

//trying to show define in another php tag
echo DATA;
?>