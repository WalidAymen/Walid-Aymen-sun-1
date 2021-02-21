<?php 

/*
if the ++ is after the varible it will do the operation the increse varible by 1 after it
as example : $x =3 if(++$x==4) will be true and if($x++==4) will be false
*/
$x = 3 ; $y=$x++; //do y=x first then do x=x+1 so y =3 and x=4
$y+= ++$x; // y=y+(x+1) do the x=x+1 befora summation so y here = 8

if ($y == 7) {// condetion is false coz y =8 
 	$x++;
 	echo $x ."<br>";
 }
else if ($y == 8){ // condetion is true and x=4
 	$x--;
 	echo $x ."<br>";
	}
else if ($y == 9) { // condetion is false
	$x+=2;
	echo $x ."<br>";
}
else {  // condetion is false
	$x= 0;
	echo $x ."<br>"; }

?>
