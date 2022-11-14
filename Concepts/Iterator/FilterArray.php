<?php 

namespace It;

class FilterArray extends \FilterIterator {
	public function accept() {
		$current = $this->getInnerIterator()->current();
		if(count($current) == 1) {
			return false;
		}
		return true;
	}
}