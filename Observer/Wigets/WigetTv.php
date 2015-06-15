<?php
class WigetTv implements IObserver{
	protected $tv;  
	private $subject;
	public function WigetTv(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}
	public function update(String $twiter, String $lenta, String $tv){
		$this->tv=$tv;
		display();
	}
	//выводим новость
	public function display(){
		print($this->tv);
		
	}
	public function removFromSubject(){
		$this->subject->removObserver($this);
	}
	
}