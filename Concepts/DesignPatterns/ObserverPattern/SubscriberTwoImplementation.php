<?php

namespace Op;

use Op\SubscriberInterface;

class SubscriberTwoImplementation implements SubscriberInterface{

    public function update($data)
    {
        if (!empty($data)) {
            echo "Two Notified" . PHP_EOL;
            print_r($data);
        }
    }
}