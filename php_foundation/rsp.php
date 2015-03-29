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
            <p><label>ROCK: <input type="radio" name="rsp" value="0" checked="checked"></label></p>
            <p><label>SCISSORS: <input type="radio" name="rsp" value="1"></label></p>
            <p><label>PAPER: <input type="radio" name="rsp" value="2"></label></p>
            <p><input type="submit" value="PLAY"></p>
        </form>
    </div>
</body>
</html>
