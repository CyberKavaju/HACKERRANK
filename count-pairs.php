<?php 
$n = 7;
$ar = [1,2,1,2,1,3,2];

$cnt = 0;
$cnt_ar = array_count_values($ar);
foreach ($cnt_ar as $key => $value) {
    ///check how many times i can divede it by 2
    $cnt += floor($value / 2);
}
echo $cnt;

