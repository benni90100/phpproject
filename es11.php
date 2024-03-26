<?php
$arr = [ 1,2,3,4,5,6,76];
$sum = 0;
$count = count($arr);
foreach($arr as $num){
    $sum+=$num;
}
echo $sum / $count


?>