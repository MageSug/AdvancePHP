<?php 

namespace Sp;

use Sp\SortingInterface;

class SelectionSorting implements SortingInterface {
    
    public function sort(array $data): array {
        echo "Selection Sort";
        for($i = 0; $i < count($data) ; $i++)
        {
            $low = $i;
            for($j = $i + 1; $j < count($data) ; $j++)
            {
                if ($data[$j] < $data[$low])
                {
                    $low = $j;
                }
            }
                    
            if ($data[$i] > $data[$low])
            {
                $tmp = $data[$i];
                $data[$i] = $data[$low];
                $data[$low] = $tmp;
            }
        }
        return $data;
    }
}