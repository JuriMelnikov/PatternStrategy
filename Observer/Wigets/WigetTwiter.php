<?php
class WigetTwiter implements IObserver{
	protected $twiter;  
	private $subject;
	public function WigetTwiter(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}
	public function update(String $twiter, String $lenta, String $tv){
		$this->twiter=$twiter;
		display();
	}
	//выводим новость
	public function display(){
		print($this->twiter);
		
	}
	public function removFromSubject(){
		$this->subject->removObserver($this);
	}
	
}