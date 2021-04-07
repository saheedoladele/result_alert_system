<?php
$array1 = array();
$array2 = array();
$array3 = array();

for ($i=1; $i<=50;$i++){
	$array1[] = $i;
}

for ($j=10; $j<=20;$j++){
	$array2[] = $j;
}

$array3 = array_diff($array1, $array2);
echo shuffle($array3);
print_r($array1);
print_r($array2);
print_r($array3);
?>