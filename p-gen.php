#!/user/bin/env php
<?php

// password generator mini project

function password($length = 8){
    global $abc;
    global $num;

    $abc = 'abcdefghijklmnopqrstuvwxyz';
    $num = '1234567890';

    $string = $abc.$num;
    $char = str_shuffle($string);
    $charlen = strlen($char);

    $password  = '';
    for($i=0;$i<$length;$i++){
        $password .= $char[random_int(0,$charlen-1)];
    }
    return $password;
    

}

    if(true){
        $abc = readline("input alphabates : ");
        if($abc != null){
            $num = readline("input numbers: ");
            if($num != null || $abc != null){
                echo password();
            }
        }
    }

    