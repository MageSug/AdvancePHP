<?php

namespace Op;

use Op\PublisherOneImplementation;
use Op\PublisherTwoImplementation;

use Op\SubscriberOneImplementation;
use Op\SubscriberTwoImplementation;
use Op\SubscriberThreeImplementation;

class StateChanger {

    private PublisherOneImplementation $publisherOne;
    private PublisherTwoImplementation $publisherTwo;

    private SubscriberOneImplementation $subscriberOne;
    private SubscriberTwoImplementation $subscriberTwo;
    private SubscriberTHreeImplementation $subscriberThree;

    public function changeStateOfPublisherOne() 
    {
        $this->publisherOne = new PublisherOneImplementation;
    
        $this->subscriberOne = new SubscriberOneImplementation;
        $this->subscriberThree = new SubscriberThreeImplementation;

        $this->publisherOne->addSubscriber($this->subscriberOne);
        $this->publisherOne->addSubscriber($this->subscriberThree);
        
        $data = [
            "id" => 1,
            "name" => "chris"
        ];
        $this->publisherOne->removeSubscriber($this->subscriberThree);
        $this->publisherOne->notify($data);
    }

    public function changeStateOfPublisherTwo() 
    {
        $this->publisherTwo = new PublisherTwoImplementation;
        $this->subscriberTwo = new SubscriberTwoImplementation;
        
        $this->publisherTwo->addSubscriber($this->subscriberTwo);
        $data = [
            1 => "red",
            2 => "apple"
        ];
        $this->publisherTwo->notify($data);
    }

}