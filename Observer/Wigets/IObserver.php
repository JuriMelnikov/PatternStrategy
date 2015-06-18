<?php
interface IObserver{
	public function update($twiter, $lenta, $tv);
	public function display();
	public function removeFromSubject();
}