<?php
class WigetLenta extends Observer{
	private $lenta;
	private $subject;

	// Конструктор ноблюдателя
	public function WigetLenta(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}
	
	// Получаем обновления (реализуем абстрактный метод из класса Observer)
	public function update(){
		$numargs = func_num_args();
		$arg_list = func_get_args();
		for ($i = 0; $i < $numargs; $i++){
			foreach ($arg_list[$i] as $key => $value) {
				if($key == "lenta"){
					$this->lenta=$value;
				}
			}
		}
		$this->display();
	}
	//выводим новость (реализация абстрактного метода из класса Observer)
	public function display(){
		print($this->lenta);
		
	}

}