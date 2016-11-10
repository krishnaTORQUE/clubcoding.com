<?php 

function headAll_css($arg) {
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

array_push($this->ADD_FUNC['IN_HEAD'], 'headAll_css');
array_push($this->ADD_FUNC['IN_FOOTER'], 'headAll_js');

?>