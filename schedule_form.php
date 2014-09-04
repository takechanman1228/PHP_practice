<?php

   function showOption($start,$end,$step=1){
   for($i=$start;$i<=$end;$i+=$step){
		      print('<option value="'.$i.'">'.$i.'</option>');
		      }
		      

		      }
		      ?>

<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8"/>
<title>スケジュール</title>
</head>
<body>
<h3>schedule</h3>

<form method="POST" action="schedule_record.php">

<div class="container">
<label for ="title">予定：</label><br/>
<input type="text" id="title" name="title" size="50" maxlength="255"/>
</div>


<div class="container">
<label for ="memo">備考：</label><br/>
<input type="text" id="memo" name="memo" size="70" maxlength="255"/>
</div>

<input type="submit" value="登録"/>
</p>
</form>
</body>
</html>


