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
            <u>Update: 14-12-2016</u>
            &emsp;
            <u>Version: 1.3</u>
        </p>

        <div class="zee-social-buttons" data-social-buttons="facebook,twitter,googleplus,linkedin" data-social-buttons-img="https://cdn.rawgit.com/krishnaTORQUE/Zee-Social-Buttons/master/zee-social-buttons.png"></div>

        <p>
            Online Code Minify Tool.<br/>
            We do not store, share or sell any code.
        </p>

        <form action="<?php echo $this->URL('FULL'); ?>" method="post">
            <textarea name="giv_code" class="field field_block giv_code" placeholder="Type or paste your code here ..."><?php
                if (isset($_POST['giv_code'])) {
                    echo $_POST['giv_code'];
                }
                ?></textarea>
            <label>Type: </label>
            <select class="field" name="type">
                <option>HTML</option>
                <option>CSS</option>
                <option>JS</option>
                <option>JSON</option>
                <option>XML</option>
            </select>
            &nbsp;
            <input type="submit" name="submit" value="Do Minify" class="btn btn_cbu"/>
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
                background: #fdfdfd;
                border: 1px solid #ccc;
                height: 350px;
                font-size: 12px;
                margin: 15px 0;
                font-family: monospace;
                overflow: scroll !important;
            }
        </style>

    </div>
</div>