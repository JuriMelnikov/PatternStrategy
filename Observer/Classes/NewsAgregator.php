<?php
class NewsAgregator implements ISubject{
	protected $register=array(); //здесь зарегестрированные наблюдатели
	
	public function registerObserver(IObserver $observer){
		$this->register[]=$observer;
		
	}
	//убираем наблюдателя
	public function removObserver(IObserver $observer){
		while (($remObserver = array_search($observer, $this->register)) !== false) {
			echo get_class($this->register[$remObserver]);
			unset($this->register[$remObserver]);
		} 
		
	}
	//посылаем зарегестрированным наблюдателям новость
	public function notify(){
		foreach ($this->register as $key => $value) {
			$value->update();
		}
	}
}