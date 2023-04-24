<?php 
namespace Inter;

use Inter\Inter1;
use Inter\Inter2;

class InterFac implements Inter1, Inter2{
	public function getInter(){
		echo "Inter1:getInter" . "<br>";
	}
	public function setInter(){
		echo "Inter2:setInter" . "<br>";
	}
 	// public function count(){
	// 	return 5;
	// }
}