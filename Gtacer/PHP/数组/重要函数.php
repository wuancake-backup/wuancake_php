<?php
	//ʹ��count����ͳ������������count($arr);
	count($arr);	//�������鳤��

	//ʹ��is_array�����ж����飬is_array($arr);
	count($arr);	//�����鷵��1�����򷵻ؿ�ֵ

	//print_r()��var_dump()������ʾ����Ĺؼ��ֺ�ֵ
	print_r($arr);
	var_dump($arr);	//��ʾ�ؼ��֣�ֵ����������

	//����ַ���:explode explode("����ʲô���",�ַ���);
	$str="���� ��� �Ϻ�";
	$str="����&���&�Ϻ�";
	$arr=explode(" ",$str);		//arr[0]=���� arr[1]=��� arr[2]=�Ϻ�
	$arr=explode("&",$str2);	//arr[0]=���� arr[1]=��� arr[2]=�Ϻ�
?>