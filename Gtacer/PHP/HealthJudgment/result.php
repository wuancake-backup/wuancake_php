<?php
	$height=$_REQUEST['height'];
	$weight=$_REQUEST['weight'];
	echo '��������'.$height."cm\n";
	echo '���������'.$weight."kg\n";
	if($height-$weight==105){
		echo '���Ǳ�׼����';
	}
	else if($height-$weight<105){
		echo '�������ƫ��';
	}
	else if($height-$weight>105){
		echo '�������ƫ��';
	}
?>