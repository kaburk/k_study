<?php
    /* じゃんけんの手のリスト */
    $handsList = array(
        0 => 'グー',
        1 => 'チョキ',
        2 => 'パー'
    );

    /* じゃんけんの結果に対するメッセージ */
    $message = array(
        0 => '引き分け',
        1 => 'あなたの勝ち',
        2 => 'あなたの負け'
    );

    /* じゃんけんしたゲームの回数を返す */
    function countGame() {
        if (!isset($_SESSION['games'])) {
            $_SESSION['games'] = 1;
        } else {
            $_SESSION['games']++;
        }
    };


    /* じゃんけんの勝敗判定処理 */
    function jyankenMatch($computerHand, $userHand) {

        /* 勝ち -2, 1 | 負け -1, 2 | 引き分け 0 */
        $result = $computerHand - $userHand;

        /* 判定 */
        if ($result == 0) {
            return 0;
        } elseif ($result == -2 || $result == 1) {
            return 1;
        } elseif ($result == -1 || $result == 2) {
            return 2;
        }

    }

    /* セッション変数('games', 'gameResults')をリセットする */
    function resetSessionVar() {
        unset($_SESSION['games']);
        unset($_SESSION['gameResults']);
    }
