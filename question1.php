<?php 
$array = array();
for ($x = 0; $x < 1000; $x++) {
    if ($x % 3  ==0 or $x % 5 ==0){
$array[] = $x;
}
} 
print array_sum($array)."<br />";
?>