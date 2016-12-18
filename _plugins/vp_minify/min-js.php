<?php

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

/*
 * JavaScript Minify
 */

if (isset($arg->EXTRA['vp_minify']['js'])) {
    $time = null;
    if (!is_dir(ROOT . 'min')) {
        mkdir(ROOT . 'min', 0777, TRUE);
    }

    if (file_exists(ROOT . 'min/javascript.js')) {
        if (isset($arg->EXTRA['vp_minify']['cache']) && $arg->EXTRA['vp_minify']['cache'] === false) {
            dominjs($arg);
            $time = '?t=' . time();
        }
    } else {
        dominjs($arg);
    }
    echo '<script type="text/javascript" src="' . $arg->URL('APP') . 'min/javascript.js' . $time . '"></script>';
}

function dominjs($arg) {
    require_once ROOT . $arg->PLUGIN_ACTIVE('vp_minify') . 'minify.php';
    $min = new minify();
    $data = '';
    foreach ($arg->EXTRA['vp_minify']['js'] as $js) {
        $data .= $min->js(file_get_contents($js));
    }
    file_put_contents(ROOT . 'min/javascript.js', $data);
}

?>