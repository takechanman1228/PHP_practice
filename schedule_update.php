<?php
try{
$db=new PDO ('mysql:host=localhost;dbname=schedule;charset=utf8','root','Take1228');

if(isset($_POST['update'])){
$stt=$db->prepare('UPDATE schedule SET title=:title,memo=:memo WHERE sid=:sid');

$stt->bindValue(':title',$_POST['title']);

$stt->bindValue(':memo',$_POST['memo']);

$stt->execute();
$db=NULL;



} elseif (isset($_POST['delete'])){
$stt=$db->prepare('DELETE FROM schedule WHERE sid=:sid');
}
$stt->bindValue(':sid',$_POST['sid']);

$stt->execute();

}catch(PDOException $e) {
die('エラーメッセージ:'.$e->getMessage());

}
header('Location:http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/schedule_form.php');
