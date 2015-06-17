<?php
//namespace Patterns\Strategy\Ducks;


abstract class classDuckBase{

 protected $flyBehaviour;
 protected $quackBehaviour;



function classDuckBase(){
	 $this->flyBehaviour = new classFlyWithWinds();
	 $this->quackBehaviour = new classSimpleQuack();
	
	
}
	public function setFlyBehaviour(iFlyable $newBehaviour){
		$this->flyBehaviour=$newBehaviour;
	}
	public function setQuackBehaviour(iQuackble $newBehaviour){
		$this->quackBehaviour=$newBehaviour;
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