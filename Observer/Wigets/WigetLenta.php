<?php
class WigetLenta implements IObserver{
	private $lenta; 
	private $subject;

	// Конструктор ноблюдателя
	public function WigetLenta(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}
	
	public function update($twiter, $lenta, $tv){
		$this->lenta=$lenta;
		$this->display();
	}
	//выводим новость
	public function display(){
		print($this->lenta);
		
	}
	// Удаляем себя из Субьекта
	public function removeFromSubject(){
		$this->subject->removeObserver($this);
	}
	
	
}