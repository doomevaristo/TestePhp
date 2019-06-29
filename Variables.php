<!DOCTYPE html>
<html>
<head>
<title>Getting Started With PHP</title>
</head>
<body>
<h1>Beginners Guide For PHP</h1>
<p>Tutorial Series For Learning PHP</p>
<?php
$a=99;
$b="Calculus";
$int_exp= 345-343;
$subjects = array("calculus", "physics", "chemistry");
echo "Numbers you have got in $b are $a"."<br/>";
echo 'Numbers you have got in $b are $a'."<br/>";
$floatA=44.234224;
$floatB=5.4320998;
$sum=$floatA+$floatB;

$boolA=true;

if(!$boolA)
Echo "Statement is valid"."<br/>";
Else
echo "Invalid statement"."<br/>";

var_dump($a)."<br/>"; // This function returns the data type of the variable.
echo($sum);

?>
</body>
</html>