<?php

namespace DIC;

class User {
    
    protected $storage;

    public function __construct (SessionStorage $session)
    {
        $this->storage = $session;
    }

    public function setLanguage ($language) {
        $this->storage->set('language', $language);
    } 

    public function getLanguage () {
        return $this->storage->get('language');
    }
}