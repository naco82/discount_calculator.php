<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>割引計算</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .result {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .line {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
        }

        .total {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #0066cc;
            font-size: 20px;
            font-weight: bold;
            color: #0066cc;
        }
    </style>
</head>

<body>
    <div class="result">
        <h1>追加演習</h1>

        <h2>課題1: 割引計算プログラム</h2>
        <?php

        //割引計算プログラム
        $original_price = 5000; // 元の価格
        $discount_rate = 0.2; // 割引率（20%）
        $discount_amount = $original_price * $discount_rate;
        $final_price = $original_price - $discount_amount;

        //結果の表示
        echo "元の価格: " . $original_price . "円<br>";
        echo "割引率: " . $discount_rate * 100 . "%<br>";
        echo "最終価格: " . $final_price . "円<br>";
        ?>

        <h2>課題2: 奇数偶数判定プログラム</h2>
        <?php
        //奇数偶数判定プログラム
        
        $number = [7, 8];

        foreach ($number as $number) {
            if ($number % 2 == 0) {
                echo "{$number} は偶数です<br>";
            } else {
                echo "{$number} は奇数です<br>";
            }
        }
        ?>

        <h2>課題3: 複数条件の判定</h2>
        <?php
        //複数条件の判定
        
        $age = 25;
        $is_member = true;
        $is_student = false;

        //条件1:　18歳以上かつ会員
        if ($age >= 18 && $is_member) {
            echo "割引が適用されます<br>";
        }

        //条件2:　65歳以上または学生
        if ($age >= 65 || $is_student) {
            echo "$シニア・学生割引が適用されます<br>";
        }
        ?>

        <h2>課題4: 複合代入演算子の練習</h2>
        <?php
        //複合代入演算子の練習
        $score = 100;
        echo "初期スコア: {$score}点<br>";

        $score += 50; // ボーナスステージクリア
        echo "ボーナス後: {$score}点<br>";

        $score -= 30; //ダメージ
        echo "ダメージ後: {$score}点<br>";

        $score *= 2; // 2倍アイテム
        echo "最終スコア: {$score}点<br>";
        ?>

    </div>
</body>

</html>