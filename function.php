<?php
    $a=10;//global scope
    
    function abc($v=5){//parametric scope

        global $a;
        
        $sum=$a+$v;//local scope
        return $sum;
    }

    echo abc(20);
    echo "<br>";
    echo abc();
?>
