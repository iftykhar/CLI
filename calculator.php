#!/user/bin/env php
<?php

function calculator(int $num1,int $num2,string $operator) {

    global $num1;
    global $num2;
    global $operator;

    switch($operator){
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if($num2 != 0){
                $result = $num1 / $num2;
            }else{
                $result = "Can't be divided by ZERO";
            }
            break;
        default:
            $result = "invalid operator ";
            break;

    }

    return $result;
}

// echo calculator(10,2,"+");
$num1 = readline("insert first number: ");
$num2 = readline("insert second number: ");

$operator = readline("Insert operator (+, -, *, /): ");

if (is_numeric($num1) && is_numeric($num2) && in_array($operator, ['+', '-', '*', '/'])) {
    echo "Result: " . calculator($num1, $num2, $operator) . PHP_EOL;
} else {
    echo "Invalid input. Please enter valid numbers and operator." . PHP_EOL;
}
