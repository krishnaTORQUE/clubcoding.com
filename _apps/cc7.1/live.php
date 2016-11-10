<?php 

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

class live extends hooks {
    
    function __construct () {
        parent::__construct ();
    }
    
    public function index () {
        $this->META_SET([
            'DESCRIPTION' => 'ClubCoding Live Demos and Tools.',
            'KEYWORDS' => 'clubcoding,live,tools,demos,'
        ]);
        
        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';
        
        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once $this->PATH('ACTIVE_APP') . 'view/live.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';
        
        $this->RENDER();
    }
    
    public function imacosx () {
        require_once ROOT . 'live/imacosx/index.php';
    }
    
    public function code_minify_tool() {
        
        $this->META_SET([
            'TITLE' => 'Code Minify Tool',
            'DESCRIPTION' => 'Online Code Minify Tool',
            'KEYWORDS' => 'clubcoding,live,tools,code,minify,css minify,javascript minify'
        ]);
        
        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once ROOT . 'live/code_minify_tool.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';
        
        $this->RENDER();
    }
    
    public function password_generator() {
        $this->META_SET([
            'TITLE' => 'Password Generator',
            'DESCRIPTION' => 'Online Password Generator',
            'KEYWORDS' => 'clubcoding,password,password generate,strong password generator,random password,online password,'
        ]);
        
        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once ROOT . 'live/password-generator.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';
        
        $this->RENDER();
    }

}

?>