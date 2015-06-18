<?php
class WigetTv extends Observer{
	private $tv;
	private $subject;

	// Конструктор ноблюдателя
	public function WigetTv(ISubject $subject){
		$subject->registerObserver($this);
		$this->subject=$subject;
	}

	// Получаем обновления (реализуем абстрактный метод из класса Observer)
	public function update(){
		$numargs = func_num_args();
		$arg_list = func_get_args();
		for ($i = 0; $i < $numargs; $i++){
			foreach ($arg_list[$i] as $key => $value) {
				if($key == "tv"){
					$this->tv=$value;
				}
			}
		}
		$this->display();
	}

	//выводим новость (реализация абстрактного метода из класса Observer)
	public function display(){
		print($this->tv);
		
	}

}