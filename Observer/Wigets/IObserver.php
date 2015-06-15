<?php
interface IObserver{
	public function update(String $twiter, String $lenta, String $tv);
	public function display();
	public function removFromSubject();
}