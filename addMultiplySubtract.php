<?php
function add($num){
    $num = $num + 5;
    return multiply($num);
}
function multiply($num){
    $num = $num * 5;
    return subtract($num);
}
function subtract($num){
    $num = $num - 10;
    return $num;
}
echo add(5);
?>