<?php 

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

class contact extends hooks {
    
    function __construct () {
        parent::__construct ();
        
        $this->META_SET([
            'DESCRIPTION' => 'Contact ClubCoding. Social Network',
            'KEYWORDS' => 'clubcoding,contact,bug report,email,social,network,'
        ]);
        
        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';
        
        function contact_js($arg) {
            echo '<script type="text/javascript">var ACTIVE_APP = "' . $arg->URL('APP') . $arg->PATH('ACTIVE_APP') . '";</script>' . "\n";
            echo '<script type="text/javascript" src="' . $arg->URL('APP') . $arg->PATH('ACTIVE_APP') . 'js/contact.js"></script>' . "\n";
        }
        array_push($this->ADD_FUNC['IN_FOOTER'], 'contact_js');
        
        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once $this->PATH('ACTIVE_APP') . 'view/contact.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';
        
        $this->RENDER();
    }

}

?>