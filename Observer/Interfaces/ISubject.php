<?php
interface ISubject{
	public function register(IObserver $observer);
	public function remover(IObserver $observer);
	public function notify($news);
}