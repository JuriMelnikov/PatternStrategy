<?php
abstract class Subject implements ISubject{

	protected $register=array(); //здесь зарегестрированные наблюдатели

	// Регистрируем наблюдателя
	 public function registerObserver(IObserver $observer){
		$this->register[]=$observer;
		
	}

	//удаляем наблюдателя
	public function removeObserver(IObserver $observer){
		while (($removeObserver = array_search($observer, $this->register)) !== false) {
			//echo get_class($this->register[$remObserver]);
			unset($this->register[$removeObserver]);
		} 
	}

	//посылаем зарегестрированным наблюдателям новость
	abstract public function notify();
}