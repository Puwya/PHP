<?php 
    function sortArray(&$array)
    {
        for($i = 0; $i < 5; $i++)
        {
            for($j = $i + 1; $j < 5; $j++)
            {
                if($array[$i] > $array[$j])
                {
                    $temp = $array[$j];
                    $array[$j] = $array[$i];
                    $array[$i] = $temp;
                }
            }
        }
    }
?>