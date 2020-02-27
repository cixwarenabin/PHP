<?php
$a = 0;
$b = 1;
echo $a;
echo "\t";
echo $b."\t";
for($i=0; $i<=6; $i++)
{
    $c = $a+$b;
    echo $c."\t";
    $a = $b;
    $b = $c;
}
?>  