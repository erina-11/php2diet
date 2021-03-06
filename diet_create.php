<?php

// var_dump($_POST);
// exit();

//入力チェック(未入力の場合は弾く　コメントのみ任意）
// if (
//     !isset($_POST['weight']) || $_POST['weight'] == '' ||
//     !isset($_POST['snack']) || $_POST['snack'] == ''
// ) {
//     exit('ParamError');
// }

//データを変数に格納
// $date = $_POST['date'];
$weight = $_POST['weight'];
$snack = $_POST['snack'];
// $snack = $_POST['snack'];

// DB接続情報
$dbn = 'mysql:dbname=gsacf_d07_04;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
    $pdo = new PDO($dbn, $user, $pwd);
    // exit('ok');
} catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
}


// SQLを書く
$sql = 'INSERT INTO
diet_table(id, weight, snack, created_at, updated_at)
VALUES(NULL, :weight, :snack, sysdate(), sysdate())';

$stmt = $pdo->prepare($sql);
//バインド変数を設定
$stmt->bindValue(':weight', $weight, PDO::PARAM_INT);
$stmt->bindValue(':snack', $snack, PDO::PARAM_INT);
$status = $stmt->execute(); // SQLを実行
// var_dump($status);
// exit();
if ($status == false) {
    $error = $stmt->errorInfo();
    // データ登録失敗次にエラーを表示
    exit('sqlError:' . $error[2]);
} else {
    // 登録ページへ移動
    header('Location:diet_input.php');
}
