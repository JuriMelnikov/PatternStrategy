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
            'Wigets/'
            
            
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

$agregator=new NewsAgregator();
$lenta=new WigetLenta($agregator);
$twiter=new WigetTwiter($agregator);
$tv=new WigetTv($agregator);
//$agregator->register($wiget);
//$wiget2=new Observer($agregator);
//$wiget3=new Observer($agregator);
//$wiget2->remSubject($wiget2);
//$newser->register($wiget);
//$wiget->remObserver();
//$newser->remover($wiget3);
$agregator->notify("<br>Это первая новость!");
$agregator->notify("<br>Это вторая новость!");

echo "<br><b>Это первый виджет:</b>";
$lenta->display();
echo "<br><b>Это второй виджет:</b>";
$twiter->display();
echo "<br><b>Это третий виджет:</b>";

?>	
</body>
</html>
