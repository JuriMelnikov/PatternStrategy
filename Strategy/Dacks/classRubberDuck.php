<?php
class classRubberDuck extends classDuckBase implements  iQuackble{
	public function display()
	{
		print("<br>Я резиновая утка <br>");
	}

	public function quack()
	{
		print("Кря, кря! <br>");
	}

}