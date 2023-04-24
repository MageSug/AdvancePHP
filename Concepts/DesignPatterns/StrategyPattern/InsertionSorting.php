<?php

namespace Sp;

class InsertionSorting implements SortingInterface {

    public function sort(array $data): array
    {
        echo "Insertion Sort";
        for ($i = 1; $i < count($data); $i++)
        {
            $key = $data[$i];
            $j = $i-1;
                
            while ($j >= 0 && $data[$j] > $key)
            {
                $data[$j + 1] = $data[$j];
                $j = $j - 1;
            }
            
            $data[$j + 1] = $key;
        }

        return $data;
    }
}