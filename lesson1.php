<?php
$message = "Hello World\n";//変数に代入
echo $message;//出力

$message2 =
$name = "竹内航也";//変数に代入

echo "Welcome " . $name;//結合して出力

// 各果物の単価を変数に代入
$apple_price = 200; 
$mikan_price = 100; 

// 各果物の個数を変数に代入
$apple_count = 3; // りんごを3個購入
$mikan_count = 4; // みかんを4個購入

// 合計金額を計算（りんごの合計＋みかんの合計）
$total = ($apple_price * $apple_count) + ($mikan_price * $mikan_count);

// 合計金額を出力
echo "\n合計金額 " . $total . " 円\n";

// 配列に各色の値を格納
$colors = array("red", "blue", "green");

// 添字1を指定してblueを出力。
echo $colors[1];

// 連想配列で各人の情報を格納。
// 各要素は、名前をキーとして、年齢と職業を連想配列にして格納。
$people = array(
    "佐藤" => array("年齢" => "36才", "職業" => "営業"),
    "田中" => array("年齢" => "23才", "職業" => "事務"),
    "吉田" => array("年齢" => "54才", "職業" => "社長")
);

// キーを使用して田中さんの年齢を表示。
echo "\n田中さんの年齢は " . $people["田中"]["年齢"] . " です。";
?>