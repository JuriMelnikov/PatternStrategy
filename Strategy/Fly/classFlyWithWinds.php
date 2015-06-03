<?php
//namespace Patterns\Strategy\Fly;

class classFlyWithWinds implements iFlyable{
	public function fly()
	{
		print("Я летаю с помощью крыльев!<br>");
	}
}