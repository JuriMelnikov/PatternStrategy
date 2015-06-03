<?php
//namespace Patterns\Strategy\Ducks;


abstract class classDuckBase{

public $flyBehaviour;
public $quackBehaviour;

function __constuct(){
	$this->flyBehaviour= new classFlyWithWinds();
	$this->quackBehaviour= new classSimpleQuack();
}
	abstract function display();

	public function swim(){
		print("Я могу плавать<br>");
	}
	public function fly()
	{
		$this->flyBehaviour->fly(self);
	}
	public function quack()
	{
		$this->quackBehaviour->quack(self);
	}
	

}