<?php
	$result=$_REQUEST['result'];
	$a=rand(1,3);
	/*switch($result){
	case 'st':
		if ($a=1)
			echo "���Գ�ʯͷ��ƽ�֣�";
		else if ($a=2)
			echo "���Գ���������Ӯ�ˣ�";
		else 
			echo "���Գ����������ˣ�";
		break;

	case 'jd':
		if ($a=1)
			echo "���Գ�ʯͷ����Ӯ�ˣ�";
		else if ($a=2)
			echo "���Գ�������ƽ�֣�";
		else 
			echo "���Գ����������ˣ�";
		break;
		
	case 'b':
		if ($a=1)
			echo "���Գ�ʯͷ����Ӯ�ˣ�";
		else if ($a=2)
			echo "���Գ������������ˣ�";
		else 
			echo "���Գ�����ƽ�֣�";
		break;
	}*/
	switch($result){
	case 'st':
		switch(rand(1,3)){
		case 1:
			echo "���Գ�ʯͷ��ƽ�֣�";
		break;
		case 2:
			echo "���Գ���������Ӯ�ˣ�";
		break;
		case 3:
			echo "���Գ����������ˣ�";
		break;}
	break;

	case 'jd':
		switch(rand(1,3)){
		case 1:
			echo "���Գ�ʯͷ����Ӯ�ˣ�";
		break;
		case 2:
			echo "���Գ�������ƽ�֣�";
		break;
		case 3:
			echo "���Գ����������ˣ�";
		break;
	break;}
		
	case 'b':
		switch(rand(1,3)){
		case 1:
			echo "���Գ�ʯͷ����Ӯ�ˣ�";
		break;
		case 2:
			echo "���Գ������������ˣ�";
		break;
		case 3:
			echo "���Գ�����ƽ�֣�";
		break;}
	break;
	}
?>

<!--1ʯͷ 2���� 3��-->