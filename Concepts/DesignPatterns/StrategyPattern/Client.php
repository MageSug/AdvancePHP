<?php

namespace Sp;

use Sp\Sorting;
use Sp\SelectionIntegerSorting;
use Sp\BubbleIntegerSorting;

class Client {

    public Sorting $sort;
    public SelectionIntegerSorting $selectSort;
    public BubbleIntegerSorting $bubbleSort;

    public function integerSorting() {
        $intData = [23, 32, 1, 2, 43, 21, 233, 12];
        $this->sort = new Sorting;
        $this->selectSort = new SelectionIntegerSorting;
        $this->bubbleSort = new BubbleIntegerSorting;
        $this->sort->setIntegerSortingType($this->selectSort);
        $this->sort->setIntegerSortingType($this->bubbleSort);
        echo "Selection Sort";
        print_r($this->sort->executeIntegerSorting($intData));
        echo "Bubble Sort";
        print_r($this->sort->executeIntegerSorting($intData));
    }
}