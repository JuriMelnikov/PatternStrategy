<?php
//namespace Patterns\Strategy\Ducks;

class classSimpleDuck extends classDuckBase{
	public function display()
	{
		print("<br>Я простая утка <br>");
	}
	function iterateVisible() {
       echo "MyClass::iterateVisible:\n";
       foreach($this as $key => $value) {
           print_r( "$key => $value\n");
       }
    }

}