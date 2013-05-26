<?php 
	$input = 1073741824;
	$counter = 1;
	addDigits($input);
	echo "Runs: " . $counter;
	

	function addDigits($number) {
		global $counter;
		$digits = str_split($number);
		$digits_sum = array_sum($digits);
				
		if(strlen($digits_sum) != 1){
			$counter++;
			addDigits($digits_sum);	
		}
		else{
			echo "Solution: " . $digits_sum . "\n";		
		}	
	}

?>