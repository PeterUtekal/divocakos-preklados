<?php
		if (filter_has_var(INPUT_POST, "button")) { //check if form was submitted
				$sk = filter_input(INPUT_POST, 'sk'); //get input text
				$words_arr = explode(" ", $sk);
				$out = array();

				foreach($words_arr as $word){
						if(strlen($word) < 3){
								array_push($out, $word);
								continue;
						}

						$l = $word[-1];
						if($l == 'b' || $l == 'c' || $l == 'd' || $l == 'f' || $l == 'g' || $l == 'h' || $l == 'j' || $l == 'k' || $l == 'l' || $l == 'm' || $l == 'n' || $l == 'p' || $l == 'q' || $l == 'r' || $l == 's' || $l == 't' || $l == 'v' || $l == 'w' || $l == 'x' || $l == 'z'){
								$word = $word . 'os'; 
								array_push($out, $word);
								continue;

						}else if($l == 'o'){
								$word = $word . 's';
								array_push($out, $word);
								continue;
						}else if($l == 'a' || $l == 'i' || $l == 'y'){
								$word = substr_replace($word ,"", -1);
								$word = $word . 'os';
								array_push($out, $word);		
								continue;
						}


						array_push($out, $word);

				}


				array_push($out, ",sak");
				array_push($out, "povedz");
				array_push($out, "ty");
				array_push($out, "ne");
				$outStr = implode(" ", $out);


				echo $outStr;

		}
?>

