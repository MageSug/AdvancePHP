<?php

namespace Sp;

use Sp\SearchingInterface;

class LinearSearching implements SearchingInterface {

    public function search(array $data, $value): string {    
        for($i = 0; $i < count($data); $i++)
        {
            if($data[$i] == $value)
                return $data[$i] . " Value exists!!";
        }
        return "Value doesn't exist!!";
    }
}