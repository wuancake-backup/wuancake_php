<?php
	function abc($n){
		if($n>2){
			abc(--$n);
		}
	echo '$n='.$n."</br>";
	}

	abc(4);
?>

<!--Êä³ö½á¹û£º
	$n=2
	$n=2
	$n=3
	-->