<?php 

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

class home extends hooks {
    
    function __construct () {
        parent::__construct ();

        require_once $this->PATH('ACTIVE_APP') . 'includes/head_all.php';

        function home_css($arg) {
            echo '<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/krishnaTORQUE/ImageSlider/master/imageSlider.css"/>' . "\n";
            echo '<link rel="stylesheet" type="text/css" href="' . $arg->URL('APP') . $arg->PATH('ACTIVE_APP') . 'css/home.css"/>' . "\n";
        }

        function home_js($arg) {
            echo '<script type="text/javascript" src="https://cdn.rawgit.com/krishnaTORQUE/ImageSlider/master/imageSlider.js"></script>' . "\n";
            echo '<script type="text/javascript" src="' . $arg->URL('APP') . $arg->PATH('ACTIVE_APP') . 'js/home.js"></script>' . "\n";
        }

        array_push($this->ADD_FUNC['IN_HEAD'], 'home_css');
        array_push($this->ADD_FUNC['IN_FOOTER'], 'home_js');

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once $this->PATH('ACTIVE_APP') . 'view/home.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';

        $this->RENDER();

    }

}

?>