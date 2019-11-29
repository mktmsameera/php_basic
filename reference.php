<?php
    function abc(&$b){
        $b=20;
    }
    $a=10;
    abc($a);
    echo $a;
?>