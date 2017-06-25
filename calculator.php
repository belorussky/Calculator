<?php
$answer = "0";
if (isset($_GET["n1"],$_GET["n2"],$_GET["radio"])){
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $oper = $_GET["radio"];
    $answer = rout($n1,$n2,$oper);
}

/////  функция переменных
function rout($num1,$num2,$operation){
    switch ($operation) {
        case '+':
            $result = add($num1,$num2);
            break;
        case '-':
            $result = minus($num1,$num2);
            break;
        case '*':
            $result = multiply($num1,$num2);
            break;
        case '/':
            $result = divide($num1,$num2);
            break;
        case 'sin(x)':
            $result = sinus ($num1,$num2);
            break;
        case 'x^y':
            $result = powe ($num1,$num2);
            break;
        case 'cos(x)':
            $result = cosinus ($num1,$num2);
            break;
        case '1/x':
            $result = inverse  ($num1,$num2);
            break;
        case 'tg(x)':
            $result = tang ($num1,$num2);
            break;
        case 'in(x)':
            $result = logarithm ($num1,$num2);
            break;

        default:
            $result = 'Не известнпя операция';
            break;
    }
    return $result;
}
//////////функции на php для калькулятора
function minus($num1,$num2){
    return $num1 - $num2;
}

function add($num1,$num2){
    return $num1 + $num2;
}

function multiply($num1,$num2){
    return $num1 * $num2;
}

function divide($num1,$num2){
    if($num2 == 0){
        return "false";
    } else {
        return $num1 / $num2;
    }

    // return $num2 == 0 ? "Ошибка" : $num1/$num2;   ///////читабельный код
}
function sinus ($num1,$num2) {
    return sin($num1);
    return sin($num2);
}

function powe ($num1,$num2) {
    return pow($num1,$num2);
}

function cosinus ($num1,$num2) {
    return cos($num1);
    return cos($num2);
}

function tang ($num1,$num2) {
    return tan($num1);
    return tan($num2);
}

function inverse  ($num1,$num2) {
    return 1/$num1;
    return 1/$num2;
}

function logarithm ($num1,$num2) {
    return log($num1);
    return log($num2);
}
?>