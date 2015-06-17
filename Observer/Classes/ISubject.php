<?php
interface ISubject{
	public function registerObserver(IObserver $observer);
	public function removeObserver(IObserver $observer);
	public function notify();
}