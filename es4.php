<?php
$num = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
for ($i=0; $i <  count($num); $i++) { 
    $sum+= $num[$i];
}
$count = count($num);
echo $sum/$count

?>