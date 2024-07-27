#!/user/bin/env php
<?php


function randomstring(int  $length = 8):string{

    global $alphabets; // $alphabets = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    global $numbers;// $numbers = '1234567890';
    global $chars;// $chars = '!@#$%^&*()_+{}<>?/';

    $alphabets = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '1234567890';
    $chars = '!@#$%^&*()_+{}<>?/';

    $characters = $alphabets.$numbers.$chars;
    $charlen = strlen($characters);
    $randomString = '';

    for($i=0; $i<$length; $i++){
        $randomString = $randomString.$characters[random_int(0,$charlen - 2)];
    }

    return $randomString;


}

if(true){
    $alphabets = readline("input alphabates:");
    if($alphabets != null){
        $numbers = readline("input number: ");
        if($numbers != null){
            $chars = readline("input characters: ");
            if($chars != null){
                $length =  readline("how many digit of password: ");
                echo randomstring($length);
            }else{
                return "error, input not given properly";
            }
        }
    }
}
  

