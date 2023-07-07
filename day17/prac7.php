<?php
    $a = array("apple", "Banana", "Mango", "Grape");
    print_r($a);
    echo "<br><br> Using count();";
    echo "<br> No. of elements in array:".count($a);
    echo "<br><br> Using sort();";
    sort($a);
    print_r($a);
    echo "<br><br> Using array_reverse();";
    print_r(array_reverse($a));
    echo "<br><br> Using list();";
    list($f1, $f2, $f3, $f4) = $a;
    echo "<br> After sorting the fourth time, the list is ".$f4;
?>