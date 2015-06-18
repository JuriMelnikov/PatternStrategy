<?php
function __autoload($class_name){
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

//Создаем новостной агрегатор
$agregator=new NewsAgregator();
//Регистрируем наблюдателей
$WTw=new WigetTwiter($agregator);
$WL=new WigetLenta($agregator);
$WTv=new WigetTv($agregator);
// Удаляем зарегестрированного наблюдателя
//$WTw->removeFromSubject();
// Посылаем носвости подписчикам
$agregator->notify();

?>
</body>
</html>
