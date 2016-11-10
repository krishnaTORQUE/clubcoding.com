<?php 

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

class about extends hooks {
    
    function __construct () {
        parent::__construct ();
        
        $this->META_SET([
            'DESCRIPTION' => 'About ClubCoding. Help and Support. Terms, Conditions and Privacy Policy',
            'KEYWORDS' => 'clubcoding,about,help,support,terms,condition,privacy,policy,'
        ]);
        
        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';
        
        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once $this->PATH('ACTIVE_APP') . 'view/about.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';
        
        $this->RENDER();
    }

}

?>