<?php
class ConcreteObserver implements IObserver{
	protected $newsArrey;
	protected $remSubject;
	public function ConcreteObserver(ISubject $subject){
		$this->remSubject=$subject;
		$subject->register($this);
	}
	//получаем новость
	public function update($news){
		$this->newsArrey[].=$news;
	}
	//выводим новость
	public function display(){
		if(!empty($this->newsArrey)){
			foreach ($this->newsArrey as $value) {
			print($value);
			}
		}
	}
	// public function remSubject(){
	// 	$this->remSubject->remover($this);
	// }
	
}