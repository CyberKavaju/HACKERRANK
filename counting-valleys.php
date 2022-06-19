<?php 
$steps = 8;
//$path = 'UDDDUDUU';//equals 1 valley
$path = 'DDUUUUDDUUDD';
$ar_path = str_split($path);
//print_r($ar_path);
//loop through the array
//the hiker allways starts at sea level so a mountain is over see level and the valley is under sea level
//see level will be 0 and valley will be negative number and mountain will be positive number so when they go thru a valley it will be negative
//until it gets to 0 then that will count as a valley but if a positive goes down to 0 it will count as a mountain
$sea_level = 0;
$mountain = 0;
$valley = 0;
$dir = '';
foreach ($ar_path as $key => $value) {
  if($value == 'D'){
    $sea_level--;
    $dir = $value;
  }else{
    $sea_level++;
    $dir = $value;
  }
  if($dir == 'U'){
    if($sea_level == 0){
      $valley++;
    }
  }else{
    if($sea_level == 0){
      $mountain++;
    }
  }
  
}
echo 'cnt mountain ' . $mountain . ' cnt valley ' . $valley;
