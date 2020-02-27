<?php
function getReverse($array){
  $rev = [];
  $count = count($array);
  for($i=$count-1; $i>=0; $i--){
  $rev[] = $array[$i];
  }
  return $rev;
}

$output = getReverse(['a', 'b', 'c', 'd', 'e']);
print_r($output);
?>  