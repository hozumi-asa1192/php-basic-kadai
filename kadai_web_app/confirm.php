<?php
// postリクエストから入力データを取得
$name = $_POST['user_name'];
$age = $_POST['user_age'];
$department = $_POST['department'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員情報入力フォーム</title>
</head>
<body>
    <h2>入力内容を確認してください</h2>
    <p>問題がなければ「確定」、修正する場合は「キャンセル」をクリックしてください</p>

    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>お名前</td>
            <td><?php echo $name?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo $age?></td>
        </tr>
        <tr>
            <td>所属部署</td>
            <td><?php echo $department?></td>
        </tr>
    </table>

    <p>
        <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
        <button id="cansel-btn" onclick="history.back();">キャンセル</button>
    </p>
