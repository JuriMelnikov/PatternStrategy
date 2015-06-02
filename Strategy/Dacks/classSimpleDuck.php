<?php
class classSimpleDuck extends classDuckBase implements iQuackble, iFlyable{
	public function display()
	{
		print("<br>Я простая утка <br>");
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