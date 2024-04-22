<?php

function my_sort(&$array)
{

    $first = array_shift($array);
    $last = array_pop($array);
    array_unshift($array, $last);
    array_push($array, $first);

    static $count = 0;
    $count++;
    return $count;
}
