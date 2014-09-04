<?php 
require_once 'Encode.php';
function showOption($start,$end,$default,$step=1){

    for($i=$start;Si<=$end;$i+=$step){
        print('<option value="'.$i.'"');
        if($i===(int )$default){print('selected');}
    
print('>'.$i.'</option>');
}
}

try {
$db=new PDO ('mysql:host=localhost;dbname=schedule;charset=utf8','root','Take1228');
$stt=$db->prepare('SELECT * FROM schedule WHERE sid=:sid');
$stt->bindValue(':sid',$_GET['sid']);
$stt->execute();
}catch(PDOException $e){
die('エラーメッセージ'.$e->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset "utf-8"/>
<title>タイトル</title>

</head>
<body>
<h3>スケジュール</h3>
<?php
if($row=$stt->fetch()){


?>
<form method="POST" action="schedule_update.php">
<input type="hidden" name="sid" value="<?php print (e($row['sid']));   ?>" />


<div class="container">
<label for ="title">予定：</label><br/>
<input type="text" id="title" name="title" size="50" maxlength="255"
value= "<?php print(e($row['title']));?>"
/>
</div>


<div class="container">
<label for ="memo">備考：</label><br/>
<input type="text" id="memo" name="memo" size="70" maxlength="255"
value= "<?php print(e($row['title']));?>"
/>
</div>

<input type="submit" name="update" value="更新"/>

<input type="submit" name="delete" value="削除"
onclick ="return conform('本当にクリックしてもいいですか')"/>

</form>
<?php
} else{
print('該当するデータなし');
}
?>
</body>
</html>



