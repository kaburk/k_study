<?php
require_once 'functions.php';

if (isset($_GET['gdata'])) {
    $data = $_GET['gdata'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GETデータの受け渡し</title>
</head>
<body>
    <div id="contents">
        <p style="color: red;">
            <?php echo isset($data) ? h($data) : 'データは入力されませんでした。'; ?>
        </p>
    </div>
    <p><a href="./get.php">戻る</a></p>
</body>
</html>
