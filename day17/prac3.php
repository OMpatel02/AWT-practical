<?php
    $a = array(1,3,5,7,9,11);
    echo "<pre>";
    print_r($a);
    $sum = 0;
    foreach($a as $value)
    {
        $sum = $sum + $value;
    }
    echo "Sum of given sequence is ".$sum;
    $avg = $sum/6;
    echo "<br> Avg is ".$avg;
?>