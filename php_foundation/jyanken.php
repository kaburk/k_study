<?php
session_start();
require_once 'jyankenFunctions.php';
if ($_POST['hand']) {

    /* コンピューターのじゃんけんの手 */
    $computerHand = mt_rand(0, 2);

    /* 相手のじゃんけんの手 */
    $userHand = $_POST['hand'];

    /* じゃんけんの勝敗 */
    $gameResult = jyankenMatch($computerHand, $userHand);


    /* ゲームの回数をカウントする */
    countGame();

    /* セッション変数にゲームの結果を追加する */
    $_SESSION['gameResults'][] = $gameResult;

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>じゃんけん</title>
</head>
<body style="margin: 0 auto;">
    <div id="contents">
        <?php if ($_SESSION['games'] != NULL && $_SESSION['games'] < 4): ?>
            <div>
                <p>コンピューター: <?php echo $handsList[$computerHand]; ?></p>
                <p>あなた: <?php echo $handsList[$userHand]; ?></p>
                <h3 style="color: red;">勝敗結果: <?php echo $message[$gameResult]; ?></h3>
            </div>
        <?php endif; ?>
        <?php if ($_SESSION['games'] == NULL || $_SESSION['games'] < 3): ?>
            <div>
                <h1>じゃんけん3回勝負!!</h1>
                <h2><?php echo $_SESSION['games'] == NULL ? '1回目' : $_SESSION['games'] + 1 . '回目'; ?></h2>
                <form action="" method="post">
                    <p>グー<input type="radio" name="hand" value="0"></p>
                    <p>チョキ<input type="radio" name="hand" value="1"></p>
                    <p>パー<input type="radio" name="hand" value="2"></p>
                    <p><input type="submit" value="じゃんけんする"></p>
                </form>
            </div>
        <?php elseif ($_SESSION['games'] == 3): ?>
            <div>
                <table border="1">
                    <tr>
                        <th>-</th><th>勝敗</th>
                    </tr> 
                    <?php foreach ($_SESSION['gameResults'] as $key => $game): ?>
                    <tr>
                        <td><?php echo '第' . ($key + 1) . 'ゲーム目'; ?></td>
                        <td><?php echo $message[$game]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <a href="./jyanken.php">最初からじゃんけんする</a>
                    <?php resetSessionVar(); ?>
                </table>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
