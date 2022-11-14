<?php 

namespace Trt;

trait tt{
	protected function trt(){
		echo "traitexample:tt <br>";
	}
}

class traitexample{
	use tt;
	public function save(){
		$this->trt();
	}
}