<?php 

namespace CE;

class ClosureExampleWithScope {

	public function classicClosure() 
	{
		$name = "Mike";
		$print = function() use (&$name) {
			echo "Hello " . $name . "<br>";
		};
		$print();
	}

	public function shortClosure(?string $name = "Andrew") 
	{
		$print = fn()=>"Hello " . $name . "<br>";
		echo $print();
	}

	public function closureFunc(callable $message, string $msg) 
	{
		$message($msg);
	}
}