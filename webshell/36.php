<?php
class A{
    function __construct(){
        assert(@$_GET['a']);
    }
}
stream_wrapper_register("st", "A");
$fp = fopen("st://","r");
?>