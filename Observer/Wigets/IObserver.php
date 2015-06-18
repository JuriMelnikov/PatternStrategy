<?php
interface IObserver{
	public function update();
	public function display();
	public function removeFromSubject();
}