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

// キーを使用して田中さんの年齢を表示します。
echo "\n田中さんの年齢は " . $people["田中"]["年齢"] . " です。";

// 変数Aと変数Bに数値を代入
$A = 5;
$B = 7;

// どちらの変数が大きいかを判定し、大きい方の変数名を表示
if ($A > $B) {
    echo "\nA\n";
} elseif ($B > $A) {
    echo "\nB\n";
} else {
    // 値が同じ場合
    echo "\nAとBは同じ値\n";
}
// 判定する数値を変数に代入
$number = 7;

// 余りが出ない場合は偶数
if ($number % 2 === 0) {
    echo $number . " は偶数です。\n";
} else {
    echo $number . " は奇数です。\n";
}
$score = 95;

// 成績判定を行う
if ($score == 100) {
    // 100点の場合
    echo "成績: AA\n";
} elseif ($score >= 90) {
    // 90点以上（ただし100点は除く）
    echo "成績: A\n";
} elseif ($score >= 80) {
    // 80点以上
    echo "成績: B\n";
} elseif ($score >= 70) {
    // 70点以上
    echo "成績: C\n";
} elseif ($score >= 60) {
    // 60点以上
    echo "成績: D\n";
} else {
    // 60点未満
    echo "成績: E\n";
}
$number = -5;

// 数値が正の数、負の数、またはゼロかを判定する
if ($number > 0) {
    echo $number . " は正の数です。\n";
} elseif ($number < 0) {
    echo $number . " は負の数です。\n";
} else {
    echo $number . " はゼロです。\n";
}

$age = 40;

// 年齢に応じたバス料金の判定
if ($age >= 0 && $age <= 5) {
    echo "バス料金は無料です。\n";
} elseif ($age >= 6 && $age <= 12) {
    echo "バス料金は200円です。\n";
} elseif ($age >= 13 && $age <= 70) {
    echo "バス料金は500円です。\n";
} elseif ($age > 70) {
    echo "バス料金は無料です。\n";
}
for ($i = 1; $i <= 10; $i++) {
    // 数字を出力し、改行を追加
    echo $i . "\n";
}
// 合計を保持する変数を初期化
$sum = 0;

// 1から50までの数字を順に加算するループ
for ($i = 1; $i <= 50; $i++) {
    $sum += $i;
}

// 合計を表示する
echo "1から50までの数字の合計は " . $sum . " です。\n";

for ($i = 10; $i >= 1; $i--) {
    echo $i . "\n";
}
?>

