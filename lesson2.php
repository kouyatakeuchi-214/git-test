<?php
// キーを使用して田中さんの年齢を表示。
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
?>