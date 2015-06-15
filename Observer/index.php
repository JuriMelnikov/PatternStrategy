<?php
// namespace Patterns\Strategy;
// use Patterns\Strategy\Ducks;
// use Patterns\Strategy\Quack;
// use Patterns\Strategy\Fly;
function __autoload($class_name) 
    {
        //class directories
        $directorys = array(
            'Classes/',
            'Interfaces/'
            
            
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

$newser=new ConcreteSubject();
$wiget=new ConcreteObserver($newser);
//$newser->register($wiget);
$wiget2=new ConcreteObserver($newser);
$wiget3=new ConcreteObserver($newser);
//$wiget2->remSubject($wiget2);
//$newser->register($wiget2);
$newser->remover($wiget2);
$newser->remover($wiget3);
$newser->notify("<br>Это первая новость!");
$newser->notify("<br>Это вторая новость!");

echo"<br><b>Это первый виджет:</b>";
$wiget->display();
echo"<br><b>Это второй виджет:</b>";
$wiget2->display();

?>	
</body>
</html>
