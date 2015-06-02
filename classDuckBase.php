<?php
protected $flyBehavior;
protected $quackBehavior;
function __consturct(){
	$this->flyBehavior=new classFlyWithWinds();
	$this->quackBehavior=new classSimpleQuack();
}
public function setFlyBehavior(iFlyable $value)
{
	$this->flyBehavior=$value;
}
public function getFlyBehavior(){
	return $this->flyBehavior;
}
public function setQuackBehavior(iQuackble $value)
{
	$this->quackBehavior=$value;
}
public function getQuackBehavior()
{
	return $this->quackBehavior;
}

abstract class classDuckBase{
	abstract function display();

	public function swim(){
		print("Я могу плавать<br>");
	}
	public function fly()
	{
		print("Я летаю! <br>");
	}
	public function quack()
	{
		print("Кря, кря! <br>");
	}

}