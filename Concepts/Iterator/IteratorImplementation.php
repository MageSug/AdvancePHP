<?php 

namespace It;

class IteratorImplementation {

	public function arrayImplementation(Iterable $myIterables) {
		var_dump($myIterables);
		foreach ($myIterables as $key => $value) {
			var_dump($value);
		}
	}
}