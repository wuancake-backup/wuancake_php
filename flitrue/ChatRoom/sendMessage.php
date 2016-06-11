<?php
	include 'MessageService.class.php';
	$getter=$_POST['getter'];
	$sender=$_POST['sender'];
	$content=$_POST['content'];

	$ms = new MessageService();
	$mes=$ms->addMessage($sender,$getter,$content);

?>