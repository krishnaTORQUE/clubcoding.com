<?php

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

/*
 * CSS Minify
 */

if (isset($arg->EXTRA['vp_minify']['css'])) {
    $time = null;
    if (!is_dir(ROOT . 'min')) {
        mkdir(ROOT . 'min', 0777, TRUE);
    }

    if (file_exists(ROOT . 'min/stylesheet.css')) {
        if (isset($arg->EXTRA['vp_minify']['cache']) && $arg->EXTRA['vp_minify']['cache'] === false) {
            domincss($arg);
            $time = '?t=' . time();
        }
    } else {
        domincss($arg);
    }
    echo '<link href="' . $arg->URL('APP') . 'min/stylesheet.css' . $time . '" type="text/css" rel="stylesheet" />';
}

function domincss($arg) {
    require_once ROOT . $arg->PLUGIN_ACTIVE('vp_minify') . 'minify.php';
    $min = new minify();
    $data = '';
    foreach ($arg->EXTRA['vp_minify']['css'] as $css) {
        $data .= $min->css(file_get_contents($css));
    }
    file_put_contents(ROOT . 'min/stylesheet.css', $data);
}

?>