<?php

$abc = "abcdefghijklmnopqrstuvwxyz";
$num = "1234567890";

$string = $abc.$num;

// echo $string;
$key = str_split($string);
$pass = shuffle($key);
// $a = explode("",$pass);
// implode(1,$pass);
// var_dump($pass);
$a = join("",$key);
// var_dump($a);
$b = str_shuffle($string);
function pass($lenght = 8){

    global $b;
    $blen = strlen($b);
    $password = '';
    for($i=0;$i<$lenght;$i++){
        $password .=  $b[random_int(0,$blen-2)];
    }

    return $password;
}
echo pass();
