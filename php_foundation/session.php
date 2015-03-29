<?php
session_start();

if (isset($_SESSION['count'])) {
    $_SESSION['count']++;
} else {
    $_SESSION['count'] = 1;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SESSIONの利用</title>
</head>
<body>
    <div id="contents">
        <h1>ブラウザを見た回数</h1>
        <p><?php echo $_SESSION['count']; ?>回目</p>
    </div>
</body>
</html>