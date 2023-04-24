<?php

namespace Op;

use Op\ObserverInterface;

interface PublisherInterface {

    public function addObserver(ObserverInterface $newObserver);

    public function removeObserver(ObserverInterface $observer);

    public function notify();

}