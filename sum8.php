<?php

$time = time(); //UNIX TIMESTAMPを[$time]という変数に格納する
echo $time;
echo "\n";

echo date("Y/m/d", $time); //出力されたUNIX TIMESTAMPをdate()で日付に換えて出力
echo "\n";

?>

<?php
$todayslunchtime = mktime(12, 15, 0, 12, 17, 2021); //本日のランチタイムを出力
echo date("Y/m/d H/i/s", $todayslunchtime);
echo "\n";

?>