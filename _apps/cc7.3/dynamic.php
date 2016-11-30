<?php

if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}

class dynamic extends VP\Controller\hooks {

    function __construct($arg) {
        parent::__construct();

        require_once ROOT . $this->PATH('ACTIVE_APP') . 'includes/head_all.php';
        require_once ROOT . 'helperclass/db_pdo.php';

        if (array_key_exists(2, $arg)) {
            $this->ERROR = true;
            $this->RENDER();
        } elseif (array_key_exists(1, $arg)) {
            $this->post_single($arg);
        } else {
            $this->post_all($arg);
        }
    }

    public function post_single($arg) {

        $blog_single_fetch = new db_pdo();
        $blog_single_fetch->connect($this->DB['cc7']);

        $query = 'SELECT post_date,post_update,post_title,post_content,post_tags,post_description 
                FROM posts WHERE post_link=:link && post_category=:category';

        $bind = [
            ':link' => preg_replace('[^a-zA-Z0-9_-]', '', $arg[1]),
            ':category' => preg_replace('[^a-z]', '', $arg[0]),
        ];

        $query_arr = [
            'result' => true,
            'fetch' => 'fetch',
            'fetch_arg' => PDO::FETCH_ASSOC
        ];

        $this->result = $blog_single_fetch->qber($query, $bind, $query_arr);

        if ($this->result[0] !== 'success' || $this->result['rows'] < 1) {
            $this->ERROR = true;
        }

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
            'TITLE' => $this->result['fetch']['post_title'],
            'DESCRIPTION' => $this->result['fetch']['post_description'],
            'KEYWORDS' => $this->result['fetch']['post_tags']
        ]);

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once $this->PATH('ACTIVE_APP') . 'view/post_single.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';

        $this->RENDER();
    }

    public function post_all($arg) {

        $this->META_SET([
            'DESCRIPTION' => 'clubcoding apps, blog, articles, tutorials, live',
            'KEYWORDS' => 'clubcoding,blog,articles,tutorials,'
        ]);

        $blog_single_fetch = new db_pdo();
        $blog_single_fetch->connect($this->DB['cc7']);

        $query = 'SELECT post_link,post_title,post_description 
                FROM posts WHERE post_category=:category ORDER BY post_id DESC';

        $bind = [
            ':category' => preg_replace('[^a-z]', '', $arg[0])
        ];

        $query_arr = [
            'result' => true,
            'fetch' => 'fetchAll'
        ];

        $this->result = $blog_single_fetch->qber($query, $bind, $query_arr);

        if ($this->result[0] !== 'success' || $this->result['rows'] < 1) {
            $this->ERROR = true;
        }

        require_once $this->PATH('ACTIVE_APP') . 'includes/header.php';
        require_once $this->PATH('ACTIVE_APP') . 'view/posts.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/sidebar.php';
        require_once $this->PATH('ACTIVE_APP') . 'includes/footer.php';

        $this->RENDER();
    }

}

?>