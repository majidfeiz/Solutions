<?php
class Solution {

    function twoSum($nums, $target) {
        $setNums=[];
        $res=[];
        for ($i=0;$i<count($nums);$i++){
            $diff=$target-$nums[$i];

            if(in_array($diff, $setNums)){
                $key=array_search($diff, $setNums);
                $res[]=$i;
                $res[]=$key;
            }
            $setNums[]=$nums[$i];
        }
        return $res;
    }
}

$obj=new Solution();
//print_r(array_search(3,[3,2,3,5]));
print_r($obj->twoSum([2,7,11,15],9));
