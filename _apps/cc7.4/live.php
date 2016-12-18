<?php

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

class live extends VP\Controller\hooks {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->META_SET([
            'DESCRIPTION' => 'ClubCoding Live Demos and Tools.',
            'KEYWORDS' => 'clubcoding,live,tools,demos,'
        ]);

        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';

        $fb_sidebar = true;

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once $this->PATH('ACTIVE_APP') . 'view/live.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';

        $this->RENDER();
    }

    public function imacosx() {
        require_once ROOT . 'live/imacosx/index.php';
    }

    public function code_minify_tool() {

        /*
         * Adding Zee Social Buttons
         */

        function social_buttons_Hadd() {
            echo '<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/krishnaTORQUE/Zee-Social-Buttons/master/zee-social-buttons.css" />';
        }

        array_push($this->ADD_FUNC['IN_HEAD'], 'social_buttons_Hadd');

        function social_buttons_Fadd() {
            echo '<script type="text/javascript" src="https://cdn.rawgit.com/krishnaTORQUE/Zee-Social-Buttons/master/zee-social-buttons.js"></script>';
        }

        array_push($this->ADD_FUNC['IN_FOOTER'], 'social_buttons_Fadd');

        $this->META_SET([
            'TITLE' => 'Code Minify Tool',
            'DESCRIPTION' => 'Online Code Minify Tool',
            'KEYWORDS' => 'clubcoding,live,tools,code,minify,css minify,javascript minify'
        ]);

        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';

        $fb_sidebar = true;

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once ROOT . 'live/code_minify_tool.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';

        $this->RENDER();
    }

    public function password_generator() {

        /*
         * Adding Zee Social Buttons
         */

        function social_buttons_Hadd() {
            echo '<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/krishnaTORQUE/Zee-Social-Buttons/master/zee-social-buttons.css" />';
        }

        array_push($this->ADD_FUNC['IN_HEAD'], 'social_buttons_Hadd');

        function social_buttons_Fadd() {
            echo '<script type="text/javascript" src="https://cdn.rawgit.com/krishnaTORQUE/Zee-Social-Buttons/master/zee-social-buttons.js"></script>';
        }

        array_push($this->ADD_FUNC['IN_FOOTER'], 'social_buttons_Fadd');

        $this->META_SET([
            'TITLE' => 'Password Generator',
            'DESCRIPTION' => 'Online Password Generator',
            'KEYWORDS' => 'clubcoding,password,password generate,strong password generator,random password,online password,'
        ]);

        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';

        $fb_sidebar = true;

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once ROOT . 'live/password-generator.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';

        $this->RENDER();
    }

    public function is_site_online() {

        /*
         * Adding Zee Social Buttons
         */

        function social_buttons_Hadd() {
            echo '<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/krishnaTORQUE/Zee-Social-Buttons/master/zee-social-buttons.css" />';
        }

        array_push($this->ADD_FUNC['IN_HEAD'], 'social_buttons_Hadd');

        function social_buttons_Fadd() {
            echo '<script type="text/javascript" src="https://cdn.rawgit.com/krishnaTORQUE/Zee-Social-Buttons/master/zee-social-buttons.js"></script>';
        }

        array_push($this->ADD_FUNC['IN_FOOTER'], 'social_buttons_Fadd');

        $this->META_SET([
            'TITLE' => 'Is Site Online',
            'DESCRIPTION' => 'Online Website Status Checker',
            'KEYWORDS' => 'clubcoding,online site status,website status,'
        ]);

        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';

        $fb_sidebar = true;

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once ROOT . 'live/is_site_online.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';

        $this->RENDER();
    }

}

?>