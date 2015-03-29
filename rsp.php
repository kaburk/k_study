<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ROCK, SCISSORS, PAPER</title>
</head>
<body>
    <div id="contents">
        <h1>ROCK, SCISSORS, PAPER! One, Two, Three!</h1>
        <h2>Choice your hands!</h2>
        <form action="./rsp_result.php" method="post">
            <span>ROCK: <input type="radio" name="rsp" value="0" checked="checked"></span>
            <span>SCISSORS: <input type="radio" name="rsp" value="1"></span>
            <span>PAPER: <input type="radio" name="rsp" value="2"></span>
            <p><input type="submit" value="PLAY"></p>
        </form>
    </div>
</body>
</html>
