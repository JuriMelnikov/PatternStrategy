<?php
class classBlueDuck extends classDuckBase implements  iQuackble, iFlyable{
	public function display()
	{
		print("<br>Я голубая утка <br>");
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