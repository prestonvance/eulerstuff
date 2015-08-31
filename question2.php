<?php
$fib= 1;
$placeholder0 = 1;
$placeholder1 = 1;
$sum = 0;

while ($fib <= 4000000){
if($fib % 2){
$sum = $fib + $sum;
echo $fib . " ";
}
$fib = $placeholder1 + $placeholder0;
$placeholder0 = $placeholder1;
$placeholder1 = $fib;

}
echo $sum;









?>