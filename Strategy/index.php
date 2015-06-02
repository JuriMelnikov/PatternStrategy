<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Patterns</title>
</head>
<body>
<?php

function __autoload($class_name) { 
     include_once($class_name . ".php"); 
} 
$Ducks[]= new classSimpleDuck();
$Ducks[]= new classExoticDuck();
$Ducks[]= new classBlueDuck();
$Ducks[]= new classWoodenDuck();
$Ducks[]= new classRubberDuck();
foreach ($Ducks as $value) {
	$value->display();
	if($value instanceof iFlyable) $value->fly();
	if($value instanceof iQuackble) $value->quack();
	$value->swim();
	
}

?>	
</body>
</html>
