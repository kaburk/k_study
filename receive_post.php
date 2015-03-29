<?php
require_once 'functions.php';

if (isset($_POST['pdata'])) {
    $data = $_POST['pdata'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POSTデータの受け渡し</title>
</head>
<body>
    <div id="contents">
        <p style="color: red;">
            <?php echo isset($data) ? h($data) : 'データは入力されませんでした。'; ?>
        </p>
    </div>
    <p><a href="./post.php">戻る</a></p>
</body>
</html>
