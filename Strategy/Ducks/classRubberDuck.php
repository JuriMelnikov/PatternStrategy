<?php
//namespace \Patterns\Strategy\Ducks;


class classRubberDuck extends classDuckBase{
	function __construct(){
		
			$this->flyBehaviour=new classNoFly();
		
		
	}
	public function display()
	{
		print("<br>Я резиновая утка <br>");
	}

}