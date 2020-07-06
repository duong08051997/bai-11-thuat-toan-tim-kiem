<?php
function countNumber($numbers,$value)
{
    $count = 0;
    for ($i = 0; $i < count($numbers); $i++) {

        if ($numbers[$i] === $value) {

            $count++;
        }
    }

    return $count;
}
echo countNumber([1,2,3,4,5,1,1,1,3,4],1);
