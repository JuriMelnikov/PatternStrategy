<?php
class NewsAgregator extends Subject{
	//реализуем абстрактный метод Subject
	public function notify(){
		$twiter=$this->getTwiterNews();
		$lenta=$this->getLentaNews();
		$tv=$this->getTvNews();
		foreach ($this->register as $key => $value) {
			$value->update($twiter, $lenta, $tv);
		}
	 }

	// ----------генерируем новостные события -----------
	public function getLentaNews(){
		$news=array(
					"<br>Новость из ленты номер 1",
					"<br>Новость из ленты номер 2",
					"<br>Новость из ленты номер 3"
					);
		return $news[rand(0,2)];
	}

	public function getTwiterNews(){
		$news=array(
					"<br>Новость из твитера номер 1",
					"<br>Новость из твитера номер 2",
					"<br>Новость из твитера номер 3"
					);
		return $news[rand(0,2)];
	}

	public function getTvNews(){
		$news=array(
					"<br>Новость из tv номер 1",
					"<br>Новость из tv номер 2",
					"<br>Новость из tv номер 3"
					);
		return $news[rand(0,2)];
	}
	//----------------------------------------------
}