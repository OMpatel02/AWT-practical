<?php
      echo "The original array:";
      $a = array( "3" => "Nissan", "4" => "BMW", "1" => "Toyota", "2" =>"Honda");
      echo "<pre>";
      print_r($a);
      echo "After Sorting: <br>";
      ksort($a);
      echo "<pre>";
      print_r($a);
?>