<?php
function quickSort($arr) {
    $arr_len = count($arr);
    
	if($arr_len < 1){
		return $arr;	
	}
	
	// We always take first element as pivot
	$pivot = $arr[0];
	
	// Create Left and Right and equal value array according to pivot element
	$p = [];
    $left = [];
    $right = [];
    foreach($arr as $val){
        if ($val < $pivot){
            $left[] = $val;
        }elseif($val > $pivot){
            $right[] = $val;
        }else{
            $p[]=$val;
        }
    }
	
    return array_merge(quickSort($left),$p,quickSort($right));
}

/*
//Sample array

$arr = [5,3,2,7,1,9,3,1,2];

$new_arr = quickSort($arr);
print_r($new_arr);
*/