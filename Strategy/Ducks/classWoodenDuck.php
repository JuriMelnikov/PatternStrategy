<?php
//namespace Patterns\Strategy\Ducks;

class classWoodenDuck extends classDuckBase {
	function __construct(){
		$this->flyBehaviour=new classNoFly();
		$this->quackBehaviour=new classNoQuack();
	}
	public function display()
	{
		print("<br>Я деревянная утка <br>");
	}
	
}