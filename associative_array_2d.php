<?php
    $arr=array(
        array('k1'=>'a','k2'=>'b','k3'=>'c'),
        array('k4'=>'d','k5'=>'e','k6'=>'f')
    );

    print_r($arr);
    echo "<hr>";//horizontal line

    //print array using foreach 
    foreach($arr as $value){
        foreach($value as $key => $v){
            echo $key."=>".$v."<br>";
        }
    }
    
?>