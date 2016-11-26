<?php

function headAll_remove_cache() {
    ob_start();
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
}

function headAll_css($arg) {
    echo '<meta http-equiv="cache-control" content="max-age=0"/>' . "\n";
    echo '<meta http-equiv="cache-control" content="no-cache"/>' . "\n";
    echo '<meta http-equiv="Cache-control" content="no-store"/>' . "\n";
    echo '<meta http-equiv="expires" content="0"/>' . "\n";
    echo '<meta http-equiv="pragma" content="no-cache"/>' . "\n";

    echo '<meta name="revisit-after" content="1 Week"/>' . "\n";
    echo '<meta name="robots" content="noodp"/>' . "\n";
    echo '<link rel="icon" type="image/png" href="' . $arg->URL('APP') . $arg->PATH('ACTIVE_APP') . 'img/icon.png"/>' . "\n";
    echo '<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/krishnaTORQUE/FrontEnd/master/FrontEnd-min.css"/>' . "\n";
    echo '<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/krishnaTORQUE/FrontEnd/master/FrontEnd-min-icons.css"/>' . "\n";
    echo '<link rel="stylesheet" type="text/css" href="' . $arg->URL('APP') . $arg->PATH('ACTIVE_APP') . 'css/style.css"/>' . "\n";
}

function headAll_js($arg) {
    echo '<script type="text/javascript" src="https://cdn.rawgit.com/krishnaTORQUE/FrontEnd/master/FrontEnd-min.js"></script>' . "\n";
    echo '<script type="text/javascript" src="' . $arg->URL('APP') . $arg->PATH('ACTIVE_APP') . 'js/jscript.js"></script>' . "\n";
}

array_push($this->ADD_FUNC['BEFORE_HEAD'], 'headAll_remove_cache');
array_push($this->ADD_FUNC['IN_HEAD'], 'headAll_css');
array_push($this->ADD_FUNC['IN_FOOTER'], 'headAll_js');
?>