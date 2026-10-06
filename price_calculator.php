<?php
//src/7-1-6_hands-on/practice/price_calculator.php
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ノートパソコン</title>
</head>

<body>
    $product_name = "ノートパソコン";
    $price = 80000;
    $quantity = 2;
    $tax_rate = 0.1;

    $subtotal = $price * $quantity;
    $tax_amount = $subtotal * $tax_rate;
    $total = $subtotal + $tax_amount;

    echo "商品名: " .$product_name . "<br>";

    echo "商品名: {$product_name}<br>";
</body>

</html>