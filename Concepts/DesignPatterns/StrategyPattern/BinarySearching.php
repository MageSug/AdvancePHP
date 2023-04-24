<?php

namespace Sp;

use Sp\SearchingInterface;

class BinarySearching implements SearchingInterface {

    public function search(array $data, $value): string
    {
        $firstIndex = 0;
        $lastIndex = count($data)-1;

        while ($firstIndex <= $lastIndex)
        {
            $midIndex = $firstIndex + ($lastIndex - $firstIndex) / 2;
         
            if ($data[$midIndex] == $value)
                return $data[floor($midIndex)] . " Value exists!!";            
     
            if ($data[$midIndex] < $value)
                $firstIndex = $midIndex + 1;
             
            else
                $lastIndex = $midIndex - 1;
        }

        return "Value doesn't exist!!";
    }
}