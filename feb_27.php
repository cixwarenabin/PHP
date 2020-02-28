<?php
$array = [15, 20, 5, 4, 3, 20, 6, 51, 99, 80];
function ascend(){
  $array[]
  $count = count($array);
  for($i=0; $i<$count; $i++){
    for($j=$i+1; $j<$count; $j++){
        if ($array[i]>$array[j]){
            $temp[] = $array[i];
            $array[i] = $array[j];
            $array[j] = $temp[];
            return $temp[];
        }
    }
}

$output = ascend([15, 20, 5, 4, 3, 20, 6, 51, 99, 80]);
print_r($output);
?>  
/*<?php
$array = [15, 20, 5, 4, 3, 20, 6, 51, 99, 80];
function ascend($array){
  global $arr1 = [];
  $count = count($array);
  for($i=0; $i<$count; $i++){
    for($j=$i+1; $j<$count; $j++){
        if ($array[$i]>$array[$j]){
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
return $arr1[];

$output = ascend([15, 20, 5, 4, 3, 20, 6, 51, 99, 80]);
print_r($output);
?>   */