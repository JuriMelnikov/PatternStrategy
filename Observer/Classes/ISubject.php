<?php
interface ISubject{
	public function registerObserver(IObserver $observer);
	public function removObserver(IObserver $observer);
	public function notify();
}