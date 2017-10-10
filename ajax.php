<?php
	$link = mysql_connect('localhost', '', '');
	mysql_select_db("vh24737_1") or die(mysql_error());
	if (!$link) {
		die('Ошибка соединения: ' . mysql_error());
	}
function see_balans($user) {
	$user_balance=mysql_query("SELECT  `money` FROM  `user` WHERE  `user` = '$user'");
	if($user_balance){
		$user_balance = mysql_fetch_array($user_balance);
		$user_balance = $user_balance['money'];
		return $user_balance;
	}
	else{
		mysql_query("INSERT INTO `user` (`id`, `user`, `money`) VALUES (NULL, '$user', '20');");
		$user_balance=20;
		return $user_balance;
	}
}
$user1 = mysql_real_escape_string($_POST['user1']);
$user2 = mysql_real_escape_string($_POST['user2']);
$transfer = intval($_POST['transfer']);

$user1_balance=see_balans($user1);
$user2_balance=see_balans($user2);
if($user1_balance>=$transfer){
	$user2_balance=$user2_balance+$transfer;
	$user1_balance=$user1_balance-$transfer;	
	mysql_query("UPDATE `user` SET  `money` =  '$user2_balance' WHERE  `user`.`user` = '$user2'");
	mysql_query("UPDATE `user` SET  `money` =  '$user1_balance' WHERE  `user`.`user` = '$user1'");
	echo("<p>good</p>");	
	echo("<p>".$user1." balance ".$user1_balance."</p>");
	echo("<p>".$user2." balance ".$user2_balance."</p>"); 
}
else{
	print("error");
}
mysql_close($link);
