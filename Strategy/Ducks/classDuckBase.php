<?php
//namespace Patterns\Strategy\Ducks;


abstract class classDuckBase{

 protected $flyBehaviour;
 protected $quackBehaviour;



function classDuckBase(){
	 $this->flyBehaviour = new classFlyWithWinds();
	 $this->quackBehaviour = new classSimpleQuack();
	
	
}

	abstract function display();

	public function swim(){
		print("Я могу плавать<br>");
	}
	
	public function fly()
	{
		$this->flyBehaviour->fly();
	}

	public function quack()
	{
		$this->quackBehaviour->quack();
	}
	

	

}