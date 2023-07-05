<?php
    $single_quote1 = '<br><a href = "http://google.com">Google</a><br>';
    echo $single_quote1;
    echo "<br>";
    $single_quote2 = '<br><a href = "http://youtube.com">Youtube</a><br>';
    echo $single_quote2;
    echo "<br>", "<br>", "<br>";
    echo <<<xyz 
    <div class = 'a'></div>
    <h2>Hello</h2>
    <h3>World</h3>
    xyz;
?>