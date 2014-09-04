<?php 
require_once 'Encode.php';


try{
$db=new PDO ('mysql:host=localhost;dbname=schedule;charset=utf8','root','Take1228');
$stt=$db->prepare('SELECT * FROM schedule ');

$stt->execute();

}catch(PDOException $e) {
$die('エラーメッセージ：'.$e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8"/>
<title>タイトル</title>
</head>
<body>
  <h3>スケジュール</h3>
<table border="1">
<tr>
<th>予定</th><th>備考</th>
</tr>

<?php while($row=$stt->fetch()){?>

<tr>
<td><?php print(e($row['title'])); ?></td>
<td><?php print(e($row['memo'])); ?></td>
<td><a href="schedule_edit.php?sid=<?php print(e($row['sid']));?>">編集</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
