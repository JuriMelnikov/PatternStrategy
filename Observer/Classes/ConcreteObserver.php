<?php
abstract class ConcreteObserver implements IObserver{
	public function update($news){
		display($news);
	}
	abstract private 
	function display($news);
}