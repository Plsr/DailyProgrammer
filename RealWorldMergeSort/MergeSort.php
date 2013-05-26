<?php
	$unsorted = array(692, 1, 32);
	$sorted = array(0, 0, 0, 14, 15, 123, 2431);
	MergeSort($sorted, $unsorted);

	echo "SORTED ARRAY: ";
	for($k = 0; $k < sizeof($sorted); $k++){
		echo $sorted[$k] . " ";
	}

	function MergeSort($sorted, $unsorted) {
		global $sorted;
		for($i = 0; $i < sizeof($unsorted); $i++){
			for($j = 0; $j < sizeof($sorted); $j++){
				//This does not apply if the param to be sorted in is bigger than the last param of $sorted. Needs a fix.
				//It's 1 a.m. now, I am so not doing this right now.
				if($unsorted[$i] > $sorted[$j] && $unsorted[$i] < $sorted[$j+1]){
					shift($sorted[$j], $j);
					$sorted[$j] = $unsorted[$i];
				}
			}
		}
	}

	function shift($value, $j){

		global $sorted;
		$place = $j;
		if($place > 0){
			$tmp = $sorted[$place-1];
			$sorted[$place-1] = $value;
			shift($tmp, $place-1);
			
		}
		else{
			$sorted[$place-1] = $value;
		}
	}
?>