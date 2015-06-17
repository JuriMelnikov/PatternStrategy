<?php
interface IObserver{
	public function update($args=array());
	public function display();
	public function removeFromSubject();
}