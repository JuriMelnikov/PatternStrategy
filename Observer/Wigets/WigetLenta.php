<?php
class WigetLenta implements IObserver{
	protected $lenta; 
	private $subject;
	public function WigetLenta(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}
	
	public function update(String $twiter, String $lenta, String $tv){
		$this->lenta=$lenta;
		display();
	}
	//выводим новость
	public function display(){
		print($this->lenta);
		
	}
	public function removFromSubject(){
		$this->subject->removObserver($this);
	}
	
	
}