<?php
//namespace \Patterns\Strategy\Ducks;


class classRubberDuck extends classDuckBase{
	function classRubberDuck(){
		parent::__construct();
		$this->flyBehaviour=new classNoFly();	
	}
	public function display()
	{
		print("<br>Я резиновая утка <br>");
	}


}