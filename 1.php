<?php

$array =[1,7,5,6,3,78,9,66,45,12,32,445,78,65,122,-15,0,22];
$min=$array[0];//temp value for compaire
$max=$array[0];
foreach ($array as $num) {
    if ($min > $num) 
        $min = $num;
    if ($max < $num)
        $max = $num;
}
echo "maximum number is : $max and minimum number is : $min";
?>