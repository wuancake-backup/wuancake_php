<?php
	function abc($n){
		if($n>2){
			abc(--$n);
		}
	echo '$n='.$n."</br>";
	}

	abc(4);
?>

<!--��������
	$n=2
	$n=2
	$n=3
	-->