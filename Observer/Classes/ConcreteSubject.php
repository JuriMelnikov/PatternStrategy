<?php
class ConcreteSubject implements ISubject{
	protected $register=array(); //здесь зарегестрированные наблюдатели
	//добавляем наблюдателя
	public function register(IObserver $observer){
		$this->register[]=$observer;
		echo count($this->register);
	}
	//убираем наблюдателя
	public function remover(IObserver $observer){
		
		while (($remObserver = array_search($observer, $this->register)) !== false) {
			unset($this->register[$remObserver]);
		} 
		//print_r($this->register);
	}
	//посылаем зарегестрированным наблюдателям новость
	public function notify($news){
		foreach ($this->register as $key => $value) {
			$value->update($news);
		}
	}
}