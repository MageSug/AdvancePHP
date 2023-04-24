<?php 

namespace Sp;

use Sp\IntegerSortingInterface;

class Sorting {

    public IntegerSortingInterface $intSortMethod;
  
    public function setIntegerSortingType(IntegerSortingInterface $intSortMethod) {
        $this->intSortMethod = $intSortMethod;
    }

    public function executeIntegerSorting(array $intData) {
        return $this->intSortMethod->integerSorting($intData);
    }
}