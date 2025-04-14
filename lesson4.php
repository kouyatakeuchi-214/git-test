<?php
for ($i = 1; $i <= 100; $i++) {
    // 数値が10の倍数であれば出力
    if ($i % 10 == 0) {
        echo $i . "\n";
    }
}
    $sum = 0;

    // 1から100までの数値をループ処理
for ($i = 1; $i <= 100; $i++) {
        // 偶数かどうかチェック（2で割った余りが0なら偶数）
    if ($i % 2 == 0) {
        $sum += $i;  // 偶数の場合は合計に加算
    }
}
for ($i = 1; $i <= 100; $i++) {
    // 15の倍数の場合（3と5の両方の倍数）
    if ($i % 15 == 0) {
        echo "FizzBuzz";
    }
    // 3の倍数の場合
    elseif ($i % 3 == 0) {
        echo "Fizz";
    }
    // 5の倍数の場合
    elseif ($i % 5 == 0) {
        echo "Buzz";
    }
    // 上記以外の場合はその数字を表示
    else {
        echo $i;
    }
    echo "\n";
}
    
echo "1から100までの偶数の合計は " . $sum . " です。\n";

$num1 = 15;
$num2 = 42;
$num3 = 7;
$num4 = 99;
$num5 = 23;

// 最初の数字を最も大きい数字として初期化
$max = $num1;

// 2番目の数字と比較
if ($num2 > $max) {
    $max = $num2;
}

// 3番目の数字と比較
if ($num3 > $max) {
    $max = $num3;
}

// 4番目の数字と比較
if ($num4 > $max) {
    $max = $num4;
}

// 5番目の数字と比較
if ($num5 > $max) {
    $max = $num5;
}

// 最も大きい数字を出力
echo "最も大きい数字は " . $max . " です。\n";

// 判定する文字列を変数に代入
$string = "racecar";

// 文字列の長さを求める
$length = 0;
while (isset($string[$length])) {
    $length++;
}

// 文字列を逆順にする
$reversed = "";
for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $string[$i];
}

// 元の文字列と逆順の文字列を比較して回文判定
if ($string === $reversed) {
    echo $string . " は回文です。";
} else {
    echo $string . " は回文ではありません。";
}
?>
