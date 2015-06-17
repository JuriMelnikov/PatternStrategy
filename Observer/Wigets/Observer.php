<?php
class Observer implements IObserver{
	private $observer;  
	private $subject;

	// Конструктор ноблюдателя
	public function Observer(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}
	// 
	public function update($args){
		foreach ($args as $key => $value) {
			$this->observer=$value;
			$this->display();
		}
		
		
	}
	//выводим новость
	public function display(){
		print($this->twiter);
		
	}
	public function removeFromSubject(){
		$this->subject->removeObserver($this);
	}
	
}