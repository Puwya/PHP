<?php
    function displayArray($array)
    {
        for($i = 0; $i < count($array); $i++)
        {
            echo "[ $array[$i] ]";
            echo " ";
        }
    }
?>