<?php
 $chelsia= 'april'; 

 $months = array('jan', 'feb', 'march', 'april', 'may');

   foreach (array_keys($months, $chelsia) as $key) { unset($months[$key]); }
    
     var_dump($months); ?>