<?php

namespace MM;

class MagicMethods{
	protected $obj;
	public function __construct($obj) {
		$this->obj = $obj;
		echo "Hello " . $this->obj . "<br>";
	}
	public function __destruct() {
		echo "Destruct " .$this->obj . "<br>";
	}
	public function __call($func, $arguments) {
		if(!method_exists($this, $func)){
			var_dump($func, $arguments);
		}
	}
	public function __callStatic($func, $arguments) {
		var_dump($func, $arguments);
	}
}