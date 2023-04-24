<?php

namespace DIC;

use ReflectionClass;
use RuntimeException;

class Container {
    private $bindings = [];

    public function set ($abstract, callable $factory) {
        $this->bindings[$abstract] = $factory;
    }

    public function get ($abstract) {
        try {
            if (isset($this->bindings[$abstract])) {
                return $this->bindings[$abstract]($this);
            }
        } catch (\Exception $e) {
            echo $e;
        }

        # build a reflection class
        $reflection = new ReflectionClass($abstract);
        
        # build its dependencies 
        $dependencies = $this->buildDependencies($reflection);
        
        # new instance with these args
        return $reflection->newInstanceArgs($dependencies);
    }

    
    private function buildDependencies ($reflection) {
        
        # get the constructor
        if (!$constructor = $reflection->getConstructor()) {
            return [];
        }

        # get its parameters
        $params = $constructor->getParameters();

        return array_map(function ($param) {
            # look at the types
            if (!$type = $param->getType()) {
                throw new RuntimeException();
            }
            # recursively build the dependencies
            return $this->get($type);
        }, $params); 
    }
}