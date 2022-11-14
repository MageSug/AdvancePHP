<?php 

namespace SE;

class SingletonExample{

	protected static $singleInstance;

	public static function getInstance(){
		// check if the singleInstance points to null or the object
		if (null === static::$singleInstance){
			// instantiates new object of current static class
			static::$singleInstance = new static(); 
		}
		return static::$singleInstance;
	}

	// New object instantiantion through constructor, cloning the current object and serialization not allowed outside the class
	protected function __construct(){}
	private function __clone(){}
	private function __wakeup(){}
}