<?php
class ConcreteSubject implements ISubject{
	protected $register;
	public function register(IObserver $observer){
		$this->register[]=$observer;
	}
	public function remover(IObserver $observer){
		while (($revObserver = array_search($observer, $this->register[])) !== false) {
			unset($this->register[$revObserver]);
		} 
	}
	public function notify($news){
		foreach ($this->register as $key => $value) {
			$value->update($news);
		}
	}
}