<?php
class WigetTwiter implements IObserver{
	private $twiter;  
	private $subject;

	// Конструктор ноблюдателя
	public function WigetTwiter(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}
	// 
	public function update($twiter, $lenta, $tv){
		$this->twiter=$twiter;
		$this->display();
	}
	//выводим новость
	public function display(){
		print($this->twiter);
		
	}
	public function removeFromSubject(){
		$this->subject->removeObserver($this);
	}
	
}