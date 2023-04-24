<?php

namespace Op;

use Op\PublisherInterface;
use Op\ObserverInterface;

class PublisherImplementation implements PublisherInterface{
    
    public $observerList = [];

    public function addObserver(ObserverInterface $newObserver)
    {
        array_push($this->observerList, $newObserver);
    }

    public function removeObserver(ObserverInterface $observer)
    {
        
    }

    public function notify()
    {
        foreach ($this->observerList as $oList) {
            
        }
    }
}