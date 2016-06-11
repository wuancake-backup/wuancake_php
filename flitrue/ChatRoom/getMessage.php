<?php

include 'MessageService.class.php';
	$getter=$_POST['getter'];
	$sender=$_POST['sender'];

	mes=$ms->getMessage($sender,$getter);
	$mes=implode('', $mes);
	file_put_contents("d:/mylog.txt",$mes,FILE_APPEND);
