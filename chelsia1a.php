<?php
$chelsia = 'march';

$months = array('jan', 'feb', 'march', 'april', 'may');
if (($key = array_search($chelsia, $months)) !== false) {
    unset($months[$key]);
}


var_dump($months);


?>
