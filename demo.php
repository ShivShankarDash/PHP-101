<?php 

$arr = [1,23,456,65];
$newarr = array_map(function ($ele) {
    return $ele*2;
},$arr);

print_r($newarr);
?>