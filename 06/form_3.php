<?php

$age = '';
$err_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['message'])) {
        $age = '私は' . $_POST['message'] . '歳です';
    } else {
        $err_msg = '年齢を入力してください。';
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
    <h1>POSTメソッド</h1>
    <form action="" method="post">
        <div>
            <?php if ($err_msg) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">年齢</label><br>
            <input type="text" name="message">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>

    <p><?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?></p>

</body>

</html>