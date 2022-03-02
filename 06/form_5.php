<?php

$msg = '';
$num1 = '';
$num2 = '';
$num3 = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['num1']) || empty($_POST['num2']) || empty($_POST['num3'])) {
        $err_msg = '全てに数字を入力して下さい。';
    } else {
        $result = $_POST['num1'] + $_POST['num2'] + $_POST['num3'];
        $msg = '合計値は' . $result . 'です';
    }
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTメソッド</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="POST">
        <div>
            <?php if ($err_msg) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">1つめの数字</label><br>
            <input type="number" name="num1">
        </div>
        <div>
            <label for="">2つめの数字</label><br>
            <input type="number" name="num2">
        </div>
        <div>
            <label for="">3つめの数字</label><br>
            <input type="number" name="num3">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <p><?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?></p>

</body>

</html>