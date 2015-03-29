<?php
function judgeGame($computerChoice, $userChoice) {

    /* 勝ち -2, 1 負け -1, 2 引き分け 0 */
    $result = $computerChoice - $userChoice;

    /* 判定 */
    if ($result == 0) {
        return 0;
    } elseif ($result == -2 || $result == 1) {
        return 1;
    } elseif ($result == -1 || $result == 2) {
        return 2;
    }
}

/* じゃんけんの手 */
$hands = array(
    0 => 'Rock',
    1 => 'Scissors',
    2 => 'Paper'
);

$judgeMessage = array(
    0 => 'Draw.',
    1 => 'You win.',
    2 => 'You lose.',
);

if (isset($_POST['rsp'])) {
    $userChoice = $_POST['rsp'];
    $computerChoice = mt_rand(0,2);
    $judgement = judgeGame($computerChoice, $userChoice);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ROCK, SCISSORS, PAPER</title>
</head>
<body>
    <div id="contents">
        <div><p>COMPUTER: <?php echo $hands[$computerChoice]; ?></p></div>
        <div><p>YOU: <?php echo $hands[$userChoice]; ?></p></div>
        <div><h3 style="color: red;">JUDGEMENT: <?php echo $judgeMessage[$judgement]; ?></h3></div>
        <p><a href="./rsp.php">PLAY ONCE MORE</a>
    </div>
</body>
</html>
