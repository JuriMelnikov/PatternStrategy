<?php
abstract class Observer implements IObserver{
	private $subject;

	// Конструктор 
	// Регистрирует наблюдателя (подписывается)
	public function Observer(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}

	// Удаляем подписку 
	public function removeFromSubject(){
		$this->subject->removeObserver($this);
	}

	// получаем обновление
	abstract public function update();

	//выводим новость
	abstract public function display();

}