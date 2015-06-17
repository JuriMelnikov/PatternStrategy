<?php
class WigetTv implements IObserver{
	private $tv;  
	private $subject;

	// Конструктор ноблюдателя
	public function WigetTv(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}
	public function update($twiter, $lenta, $tv){
		$this->tv=$tv;
		$this->display();
	}
	//выводим новость
	public function display(){
		print($this->tv);
		
	}
	public function removeFromSubject(){
		$this->subject->removeObserver($this);
	}
	
}