<?php
$nepali = 40;
$english = 54;
$math = 43;
$science = 49;
$social = 59;
$health = 68;
$GK = 70;
$computer = 89;
$avg = $nepali+$english+$math+$science+$social+$health+$GK+$computer/8;
echo "percentage: ".($avg/800 *100);
?>