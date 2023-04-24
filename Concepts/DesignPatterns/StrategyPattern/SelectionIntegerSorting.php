<?php 

namespace Sp;

use Sp\IntegerSortingInterface;

class SelectionIntegerSorting implements IntegerSortingInterface {
    
    public function integerSorting(array $intData): array {
        for($i = 0; $i < count($intData) ; $i++)
        {
            $low = $i;
            for($j = $i + 1; $j < count($intData) ; $j++)
            {
                if ($intData[$j] < $intData[$low])
                {
                    $low = $j;
                }
            }
                    
            if ($intData[$i] > $intData[$low])
            {
                $tmp = $intData[$i];
                $intData[$i] = $intData[$low];
                $intData[$low] = $tmp;
            }
        }
        return $intData;
    }
}