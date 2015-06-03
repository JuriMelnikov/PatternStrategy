<?php
//namespace Patterns\Strategy\Quack;

class classSimpleQuack implements iQuackble{
	public function quack()
	{
		print("Кря, кря!<br>");
	}
}