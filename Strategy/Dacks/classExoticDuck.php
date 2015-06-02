<?php
class classExoticDuck extends classDuckBase implements  iQuackble, iFlyable{
	public function display()
	{
		print("<br>Я экзотическая утка <br>");
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