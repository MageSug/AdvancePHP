<?php

namespace Op;

use Op\PublisherInterface;
use Op\SubscriberInterface;

class PublisherTwoImplementation implements PublisherInterface{
    
    private $subscriberList = [];

    public function addSubscriber(SubscriberInterface $newSubscriber)
    {
        array_push($this->subscriberList, $newSubscriber);
    }

    public function removeSubscriber(SubscriberInterface $subscriber)
    {
        if (in_array($subscriber, $this->subscriberList)) {
            $key = array_keys($this->subscriberList, $subscriber);
            unset($this->subscriberList[$key[0]]);
        }
    }

    public function notify($data)
    {
        foreach ($this->subscriberList as $sList) {
            $sList->update($data); 
        }
    }
}