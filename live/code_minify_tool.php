<?php
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>

<div class="contents">

    <div class="inner_content">

        <h2 class="inner_content_title">Code Minify Tool</h2>

        <p class="inner_content_description">
            <u>On: 14-08-2015</u>
            &emsp;
            <u>Update: 31-10-2016</u>
            &emsp;
            <u>Version: 1.2</u>
        </p>

        <p>
            Online Code Minify Tool.<br/>
            We do not store, share or sell any code.
        </p>

        <form action="<?php echo $this->URL('FULL'); ?>" method="post">
            <textarea name="giv_code" class="giv_code" placeholder="Type or paste your code here ..."><?php
                if (isset($_POST['giv_code'])) {
                    echo $_POST['giv_code'];
                }
                ?></textarea>
            <label>Type: </label>
            <select name="type">
                <option>HTML</option>
                <option>CSS</option>
                <option>JS</option>
                <option>JSON</option>
                <option>XML</option>
            </select>
            &nbsp;
            <input type="submit" name="submit" value="Do Minify!" class="btn btn_cbu"/>
        </form>

        <div class="giv_code"><?php
            if (isset($_POST['submit'])) {

                $arr = ['html', 'css', 'js', 'json', 'xml'];
                $type = strtolower($_POST['type']);

                if (in_array($type, $arr)) {
                    require_once ROOT . 'helperclass/minify.php';
                    require_once ROOT . 'helperclass/str.php';

                    $minify = new minify();
                    $code = $minify->$type($_POST['giv_code']);

                    $str = new str();
                    echo $str->htm_enc($code);
                }
            } else {
                echo 'Result ...';
            }
            ?></div>

        <style type="text/css">
            .giv_code{
                background: #f5f5f5;
                width: 97%;
                height: 350px;
                margin-top: 15px;
                font-size: 12px;
                font-family: monospace;
                overflow: scroll;
            }
        </style>

    </div>
</div>