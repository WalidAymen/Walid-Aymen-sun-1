<?php

$arr=[1,2,5,7,3,1,2,7,4,5,9,'a','q','z','aa','q','aq','a','b',false,true,false];
$dup=0;
foreach ($arr as $x) { //catch a variable 
    foreach ($arr as $i=>$y) { // and compare with all other variables 
        if ($x === $y) {
            $dup++;
            if ($dup >1) // it must be at least 2 to consider it as duplicate 
                unset($arr[$i]);
        }
    }
    $dup=0; //reset to the next variable 
}
print_r($arr);
?>
