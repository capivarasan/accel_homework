<?php
//カレー２５０円ハンバーグ３５０円昼定食４５０円ーひとつ選択
//ドリンクバー１５０円
$input_meal = "";
$input = "";
$total = "";
echo "メニュー番号を選んでください。[1]カレー250円,[2]ハンバーグ350円,[3]昼定食450円から１つ選んでください。";
$input_meal = fgets(STDIN,4096);
switch ($input_meal) {
	case 1:
		$sub_meal = 250;
		break;
	case 2:
		$sub_meal = 350;
		break;
	case 3:
		$sub_meal = 450;
		break;
    default:
		echo "番号が確認できません。";
		break;
}
echo "ドリンクバーをつけますか？[1]はい、[2]いいえ";
$input = fgets(STDIN,4096);

if($input==1 && $sub_meal < 300){
  $total = $sub_meal + 150;
}elseif ($input==1 && $sub_meal >= 300) {
  $total = $sub_meal + 80;
}else{
  $total = $sub_meal;
}
print "合計金額 ".$total." 円です";
?>
