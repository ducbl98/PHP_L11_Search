<?php
$numbers =[1,2,3,4,5,6,7,8,9,8,1,2,1,1,2,1,2,1];
$number=1;
function countNumber($arr,$number): int
{
    $count=0;
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]==$number){
            $count++;
        }
    }
    return $count;
}

echo implode(",",$numbers)."<br>";
echo "Count of ".$number." is ".countNumber($numbers,$number);