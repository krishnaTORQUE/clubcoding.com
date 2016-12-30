<?php

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

class _config extends VP\System\configure {

    function __construct() {
        parent::__construct();

        $this->APP['NAME'] = 'Club Coding';
        $this->APP['ACTIVE'] = 'cc7.5';
        $this->APP['ENVT'] = 'publish';
        $this->APP['ACTIVE_PLUGINS'] = ['vp_minify'];

        $this->META['DESCRIPTION'] = 'This club is all about coding';
        $this->META['STICK']['KEYWORDS'] = 'web designer,web developer,penetration,pen test';

        $this->DB['cc7'] = [
            'HOST' => '127.0.0.1',
            'DB_NAME' => 'cc7',
            'USER' => 'root',
            'PASS' => ''
        ];

        $this->APP['AJAX']['METHOD'] = 'POST';
        $this->APP['AJAX']['FROM'] = 'IN';
    }

}

?>