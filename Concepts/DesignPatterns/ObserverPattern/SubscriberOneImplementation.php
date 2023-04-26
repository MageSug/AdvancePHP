<?php

namespace Op;

use Op\SubscriberInterface;

class SubscriberOneImplementation implements SubscriberInterface{    

    public function update($data)
    {
        if (!empty($data)) {
            echo "One Notified" . PHP_EOL;
            print_r($data);
        }
    }
}