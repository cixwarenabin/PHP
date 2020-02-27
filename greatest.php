<?php 
echo "Enter three numbers: \n";
$firstnum = 2;
$secondnum = 4;
$thirdnum = 6;
if($firstnum>$secondnum && $firstnum>$thirdnum)
{echo "The greatest number is: ".$firstnum;}
elseif($secondnum>$firstnum && $secondnum>$thirdnum)
{echo "The greatest number is: ".$secondnum;}
else
{echo "The greatest number is: ".$thirdnum;}
?> 