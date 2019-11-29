<?php
    $arr=array('k1'=>'a','k2'=>'b','k3'=>'c');

    print_r($arr);
    echo "<hr>";//horizontal line

    //print array using foreach 
    foreach($arr as $key => $value){
        echo $key."=>".$value."<br>";
    }
?>