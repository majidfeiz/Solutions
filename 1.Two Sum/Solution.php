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
