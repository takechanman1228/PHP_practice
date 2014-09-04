<?php
try{
$db=new PDO ('mysql:host=localhost;dbname=schedule;charset=utf8','root','Take1228');
$stt=$db->prepare('INSERT INTO schedule(title,memo) VALUES(:title,:memo)');

$stt->bindValue(':title',$_POST['title']);

$stt->bindValue(':memo',$_POST['memo']);

$stt->execute();
$db=NULL;

}catch(PDOException $e) {
die('エラーメッセージ:'.$e->getMessage());

}
header('Location:http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/schedule_form.php');
