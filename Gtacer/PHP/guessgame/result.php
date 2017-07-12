<?php
	$result=$_REQUEST['result'];
	$a=rand(1,3);
	/*switch($result){
	case 'st':
		if ($a=1)
			echo "电脑出石头，平局！";
		else if ($a=2)
			echo "电脑出剪刀，你赢了！";
		else 
			echo "电脑出布，你输了！";
		break;

	case 'jd':
		if ($a=1)
			echo "电脑出石头，你赢了！";
		else if ($a=2)
			echo "电脑出剪刀，平局！";
		else 
			echo "电脑出布，你输了！";
		break;
		
	case 'b':
		if ($a=1)
			echo "电脑出石头，你赢了！";
		else if ($a=2)
			echo "电脑出剪刀，你输了！";
		else 
			echo "电脑出布，平局！";
		break;
	}*/
	switch($result){
	case 'st':
		switch(rand(1,3)){
		case 1:
			echo "电脑出石头，平局！";
		break;
		case 2:
			echo "电脑出剪刀，你赢了！";
		break;
		case 3:
			echo "电脑出布，你输了！";
		break;}
	break;

	case 'jd':
		switch(rand(1,3)){
		case 1:
			echo "电脑出石头，你赢了！";
		break;
		case 2:
			echo "电脑出剪刀，平局！";
		break;
		case 3:
			echo "电脑出布，你输了！";
		break;
	break;}
		
	case 'b':
		switch(rand(1,3)){
		case 1:
			echo "电脑出石头，你赢了！";
		break;
		case 2:
			echo "电脑出剪刀，你输了！";
		break;
		case 3:
			echo "电脑出布，平局！";
		break;}
	break;
	}
?>

<!--1石头 2剪刀 3布-->