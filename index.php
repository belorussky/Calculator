<!DOCTYPE html>
<html>
<?php
ini_set('display_errors',1);
ini_set('error_reporting', E_ALL);
ini_set('log_errors',1);
ini_set('error_log', '__DIR__' . '/logs.log');

include "calculator.php"; # подключение php файла
?>
<head>
    <!-- подключение php файла -->
    <title>PHP 04.05</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <form method="get" action="index.php" target="_blank">
        <input type="number" id="n1" value="<?php print $n1;?>" name="n1" placeholder="Num1" />
        <input type="number" id="n2" value="<?php print $n2;?>" name="n2" placeholder="Num2" />
        <div class="answer_block">
            <div class="ans" id="ans">
                <?php print $answer;?>
            </div>
            <div class="an">
                <input type="submit" id="btn" value="=" />
            </div>
            <div class="an"><a href="index.php">AC</a></div>
        </div>
        <div class="block_number">
            <div class="numbers">
                <div class="num">1</div>
                <div class="num">2</div>
                <div class="num">3</div>
                <div class="num">4</div>
                <div class="num">5</div>
                <div class="num">6</div>
                <div class="num">7</div>
                <div class="num">8</div>
                <div class="num">9</div>
                <div class="num">0</div>
                <div class="num">.</div>
            </div>

            <div class="block">
                <label><input type="radio" value="*" checked name="radio" />*</label>
                <label><input type="radio" value="/" name="radio"/>/</label>
                <label><input type="radio" value="-" name="radio"/>-</label>
                <label><input type="radio" value="+" name="radio"/>+</label>
                <label></label>
            </div>
        </div>

        <div class="additional_functions">
            <label><input type="radio" value="x^y" name="radio"/>x^y</label>
            <label><input type="radio" value="sin(x)" name="radio"/>sin(x)</label>
            <label><input type="radio" value="cos(x)" name="radio"/>cos(x)</label>
            <label><input type="radio" value="tg(x)" name="radio"/>tg(x)</label>
            <label><input type="radio" value="in(x)" name="radio"/>in(x)</label>
            <label><input type="radio" value="1/x" name="radio"/>1/x</label>
        </div>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script async src="script.js"></script>
</body>
</html>
