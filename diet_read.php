<?php
// DB接続情報
$dbn = 'mysql:dbname=gsacf_d07_04;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}

// 参照はSELECT文!
$sql = 'SELECT * FROM diet_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]); //失敗時のエラー出力
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); //
    $output = "";
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<td>{$record["weight"]}</td>";
        // $output .= "<td>{$record["weight"]}</td>";
        // $output .= "<td>{$record["snack"]}</td>";
        $output .= "</tr>";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB連携型dietリスト（一覧画面）</title>
</head>

<body>
    <fieldset>
        <legend>DB連携型dietリスト（一覧画面）</legend>
        <a href="diet_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <!-- <th>date</th> -->
                    <th>weight</th>
                    <!-- <th>snack</th> -->
                </tr>
            </thead>
            <tbody>
                <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
                <?= $output ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>