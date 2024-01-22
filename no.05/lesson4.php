<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は自動販売機のお釣りを計算するプログラムです。
// 150円のお茶を購入した際のお釣りを計算して表示してください。
// 計算内容は関数に記述し、関数を呼び出して結果表示すること
// $yen と $product の金額を変更して計算が合っているか検証を行うこと

// 表示例1）
// 10000円札で購入した場合、
// 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

// 表示例2）
// 100円玉で購入した場合、
// 50円足りません。

//     $yen  購入金額
// $product  商品金額


function calc($yen, $product) {
    $money = $yen - $product;
    if($money < 1){
        $notE = $product - $yen; 
        echo $notE,'円足りません。';
    } else {
        $a = $money / 10000;
        $b = $money % 10000;
        $c = $b / 5000;
        $d = $b % 5000;
        $e = $d /1000;
        $f = $d % 1000;
        $g = $f / 500;
        $h = $f % 500;
        $i = $h / 100;
        $j = $h % 100;
        $k = $j / 50;
        $l = $j % 50;
        $m = $l / 10;
        $n = $l % 10;
        $o = $n / 5;
        $p = $n % 5; 
        $total = floor($a)*10000 + floor($c)*5000 + floor($e)*1000 + floor($g)*500 + 
                 floor($i)*100 + floor($k)*50 + floor($m)*10 + floor($o)*5 + $n;
        echo 'お釣りは', $total, '円です。<br>';
        echo '（10000円札x', floor($a), '枚、5000円札x', floor($c), '枚、1000円札x', floor($e),
             '枚、500円玉x', floor($g), '枚、100円玉x', floor($i), '枚、50円玉x', floor($k), '枚、
             10円玉x', floor($m), '枚、5円玉x', floor($o), '枚、1円玉x', $n, '枚）';
    }
}



?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お釣り</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <?php
         calc(10000,150);
         echo '<br>';
         calc(2568,464);
         echo '<br>';
         calc(20,500);
        ?>
    </section>
</body>
</html>