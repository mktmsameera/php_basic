<?php
    $a=10;
    
    function abc($v=5){

        global $a;
        
        $sum=$a+$v;
        return $sum;
    }

    echo abc(20);
    echo "<br>";
    echo abc();
?>