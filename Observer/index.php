<?php
// namespace Patterns\Strategy;
// use Patterns\Strategy\Ducks;
// use Patterns\Strategy\Quack;
// use Patterns\Strategy\Fly;
function __autoload($class_name) 
    {
        //class directories
        $directorys = array(
            'Ducks/',
            'Fly/',
            'Quack/'
            
            
        );
        
        //for each directory
        foreach($directorys as $directory)
        {
            //see if the file exsists
            if(file_exists($directory.$class_name . '.php'))
            {
                require_once($directory.$class_name . '.php');
                //only require the class once, so quit after to save effort (if you got more, then name them something else 
                return;
            }            
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Observer</title>
</head>
<body>
<?php


foreach ($Ducks as $value) {

	$value->display();
	$value->swim();
	$value->fly();
	$value->quack();
}



?>	
</body>
</html>
