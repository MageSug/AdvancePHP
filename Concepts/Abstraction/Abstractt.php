<?php 

namespace Ab;

abstract class Abstractt{
	abstract public function abstractMethod(); 
	// abstract method mustn't contain body. If it does, it throws error
	// other normal methods can be declared in abstract class but not in interface
	// as interface must only contain abstract method
	public function normalMethod() {
		echo "Normal method of abstract class inherited! <br>";
	}
}