<?php 

namespace Sp;

use Sp\IntegerSortingInterface;

class BubbleIntegerSorting implements IntegerSortingInterface {
    
    public function integerSorting(array $intData): array {
             
        for($i = 0; $i < count($intData); $i++)
        {        
            for ($j = 0; $j < count($intData) - $i - 1; $j++)
            {    
                if ($intData[$j] > $intData[$j+1])
                {
                    $t = $intData[$j];
                    $intData[$j] = $intData[$j+1];
                    $intData[$j+1] = $t;
                }
            }
        }
        return $intData;
    }
}