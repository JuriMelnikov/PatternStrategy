<?php
class NewsAgregator extends Subject{

	//реализуем абстрактный метод из Subject
	public function notify(){
		$observer=array(
						"twiter"=>$this->getTwiterNews(),
						"lenta" =>$this->getLentaNews(),
						"tv"   =>$this->getTvNews()
						);
		// Перебираем зарегестрированных наблюдателей 
		// и посылаем каждому новость
		foreach ($this->register as $key => $value) {
			$value->update($observer);
		}
	 }

	// ----------генерируем новостные события -----------
	private function getLentaNews(){
		$news=array(
					"<br>Новость из ленты номер 1",
					"<br>Новость из ленты номер 2",
					"<br>Новость из ленты номер 3"
					);
		return $news[rand(0,2)];
	}

	private function getTwiterNews(){
		$news=array(
					"<br>Новость из твитера номер 1",
					"<br>Новость из твитера номер 2",
					"<br>Новость из твитера номер 3"
					);
		return $news[rand(0,2)];
	}

	private function getTvNews(){
		$news=array(
					"<br>Новость из tv номер 1",
					"<br>Новость из tv номер 2",
					"<br>Новость из tv номер 3"
					);
		return $news[rand(0,2)];
	}
	//----------------------------------------------
}