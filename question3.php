<?php
$i =  600851475143;
$x = 1;

while($x <= $i){
if ($i % $x == 0){
$factor = $i / $x;
if ( gmp_prob_prime($factor) == 2){
echo $factor;
break;
 }
}
$x ++;
}



?>