<?php

$lines=10;
$starCounter=1;
$mid=false;
for ($i=0;$i<$lines;$i++) {
    if ($starCounter==($lines/2)+1){//check if we reach the next line of the mid line to duplicate it as mid line
        $mid=true;
        $starCounter--;//to duplicate the stars in the 2 mid lines 
    }
    for ($j=0;$j<$starCounter;$j++)//printing stars loop
    {
        echo "*";
    }
    if (!$mid)
        $starCounter++;
    else 
        $starCounter--;
    
    echo "<br>";
}
?>