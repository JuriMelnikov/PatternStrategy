<?php
//namespace Patterns\Strategy\Ducks;

class classExoticDuck extends classDuckBase{
	function classExoticDuck(){
		parent::__construct(); //инициализация полей в базовом классе
		$this->quackBehaviour=new classExotic(); // переопределение поля в базовом классе
	}
	public function display()
	{
		print("<br>Я экзотическая утка <br>");
	}
	
	
}