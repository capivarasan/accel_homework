<?php
date_default_timezone_set('Asia/Tokyo');
/*入力*/
//誕生日の入力
echo "誕生月を二桁で入力してください。「例：９月の場合、０９」";
$birthday_m = trim(fgets(STDIN));

echo "誕生日を二桁で入力してください。「例：１日の場合、０１」";
$birthday_d = trim(fgets(STDIN));

//日付の妥当性
if(checkdate($birthday_m, $birthday_d, date('Y'))==false){
   echo "入力に誤りがあります。プログラムを終了します";
   return;
}

//翌年の誕生日まで計算
$today = strtotime(date('Ymd'));

$birth_date = date('Y').$birthday_m.$birthday_d;
$birth = strtotime($birth_date);

if(($birth-$today)<0){
	$birth_date = (date('Y')+1).$birthday_m.$birthday_d;
	$birth = strtotime($birth_date);
}

// 何秒離れているかを計算
$seconddiff = abs($birth - $today);
 
// 日数に変換
$daydiff = $seconddiff / (60 * 60 * 24);

echo "次の誕生日までは、 ".$daydiff." 日です";


?>
