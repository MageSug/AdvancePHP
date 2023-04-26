<?php

namespace Op;

use Op\SubscriberInterface;

class SubscriberThreeImplementation implements SubscriberInterface{

    public function update($data)
    {
        if (!empty($data)) {
            echo "Three Notified" . PHP_EOL;
            print_r($data);
        }
    }
}