<?php
    $arr=array(
        array('a','b','c'),
        array('d','e','f')
    );

    print_r($arr);
    echo "<hr>";//horizontal line

    //print array using foreach 
    foreach($arr as $value){
        foreach($value as  $v){
            echo $v."<br>";
        }
    }
    
?>