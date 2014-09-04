<?php 
function e($str,$charset='UTF-8'){
   return htmlspecialchars($str,ENT_QUOTES,$charset);


}

function format($datetime,$format='yyyy/MM/dd'){
$ts=strtotime($datatime);
print(date($format,$ts));


}
