<?php 

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

class application extends hooks {
    
    function __construct () {
        parent::__construct ();

        $this->META_SET([
            'DESCRIPTION' => 'ClubCoding Apps, Library and softwares.',
            'KEYWORDS' => 'clubcoding,apps,library,softwares,'
        ]);
        
        function apps_js($arg) {
            echo '<script type="text/javascript" src="' . $arg->URL('APP') . $arg->PATH('ACTIVE_APP') . 'js/apps.js"></script>' . "\n";
        }
        array_push($this->ADD_FUNC['IN_FOOTER'], 'apps_js');

        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once $this->PATH('ACTIVE_APP') . 'view/apps.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';

        $this->RENDER();
    }

}

?>