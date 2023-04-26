<?php

namespace Op;

use Op\SubscriberInterface;

interface PublisherInterface {

    public function addSubscriber(SubscriberInterface $newSubscriber);

    public function removeSubscriber(SubscriberInterface $subscriber);

    public function notify($data);

}