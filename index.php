<?php

define('ROOT', str_ireplace('\\', '/', dirname(__FILE__)) . '/');

$SCRIPT_NAME = str_ireplace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if (strlen($SCRIPT_NAME) > 1) {
    define('PATH', $SCRIPT_NAME . '/');
} else {
    define('PATH', $SCRIPT_NAME);
}
unset($SCRIPT_NAME);

require_once '__vp/system/boot.php';
?>