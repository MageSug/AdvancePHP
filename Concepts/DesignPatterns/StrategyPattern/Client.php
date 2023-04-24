<?php

namespace Sp;

use Sp\StrategyPatternExample;
use Sp\SelectionSorting;
use Sp\BubbleSorting;
use Sp\InsertionSorting;

use Sp\LinearSearching;
use Sp\BinarySearching;

class Client {

    public StrategyPatternExample $strategy;

    public SelectionSorting $selectSort;
    public BubbleSorting $bubbleSort;
    public InsertionSorting $insertionSort;

    public LinearSearching $linearSearch;
    public BinarySearching $binarySearch;

    public function sortData() {
        $data = [23, 32, 1, 2, 43, 21, 233, 12, 4];

        $this->strategy = new StrategyPatternExample;

        $this->selectSort = new SelectionSorting;
        $this->strategy->setSortingMethod($this->selectSort);
        print_r($this->strategy->executeSorting($data));

        $this->bubbleSort = new BubbleSorting;
        print_r($this->strategy->executeSorting($data));
        $this->strategy->setSortingMethod($this->bubbleSort);
        print_r($this->strategy->executeSorting($data));
        
        $this->insertionSort = new InsertionSorting;
        $this->strategy->setSortingMethod($this->insertionSort);
        print_r($this->strategy->executeSorting($data));
    }

    public function searchDatum() {
        $data = [54, 9, "hera feri", 45, 564, "raju", "babu rao"];
        
        $this->strategy = new StrategyPatternExample;

        $this->linearSearch = new LinearSearching;
        $this->strategy->setSearchingMethod($this->linearSearch);
        echo "Linear Search" . PHP_EOL;
        echo $this->strategy->executeSearching($data, "babu rao") . PHP_EOL;

        $this->binarySearch = new BinarySearching;
        $this->strategy->setSearchingMethod($this->binarySearch);
        echo "Binary Search" . PHP_EOL;
        echo $this->strategy->executeSearching($data, "raju") . PHP_EOL;
    }
}