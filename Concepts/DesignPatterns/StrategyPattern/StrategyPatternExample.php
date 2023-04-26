<?php 

namespace Sp;

use Sp\SortingInterface;
use Sp\SearchingInterface;

class StrategyPatternExample {

    private SortingInterface $sortMethod;
    private SearchingInterface $searchMethod;
  
    public function setSortingMethod(SortingInterface $sortMethod) {
        $this->sortMethod = $sortMethod;
    }

    public function executeSorting(array $data) {
        return $this->sortMethod->sort($data);
    }

    public function setSearchingMethod(SearchingInterface $searchMethod) {
        $this->searchMethod = $searchMethod;
    }

    public function executeSearching(array $data, $value) {
        return $this->searchMethod->search($data, $value);
    }
}