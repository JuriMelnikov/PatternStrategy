<?php
//namespace Patterns\Strategy\Ducks;

class classExoticDuck extends classDuckBase{
	function classExoticDuck(){
		parent::__construct();
		$this->quackBehaviour=new classExotic();
	}
	public function display()
	{
		print("<br>Я экзотическая утка <br>");
	}
	
	
}