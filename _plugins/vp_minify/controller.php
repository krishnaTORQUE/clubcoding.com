<?php

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

/*
 * vp_minify (Varphp Minify Plugin)
 * Version: 1.2
 */

/*
 * HTML Minify
 */

function htmlMinify($arg) {
    if (!isset($arg->EXTRA['vp_minify']['html']) || $arg->EXTRA['vp_minify']['html'] === true) {
        require_once ROOT . $arg->PLUGIN_ACTIVE('vp_minify') . 'minify.php';
        ob_start('minify::html');
    }
}

/*
 * CSS Minify
 */

function getCss($arg) {
    require_once ROOT . $arg->PLUGIN_ACTIVE('vp_minify') . 'min-css.php';
}

/*
 * JavaScript Minify
 */

function getJs($arg) {
    require_once ROOT . $arg->PLUGIN_ACTIVE('vp_minify') . 'min-js.php';
}

array_push($this->ADD_FUNC['BEFORE_HEAD'], 'htmlMinify');
array_push($this->ADD_FUNC['IN_HEAD'], 'getCss');
array_push($this->ADD_FUNC['IN_FOOTER'], 'getJs');
?>