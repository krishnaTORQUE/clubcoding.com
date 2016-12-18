<?php
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>

<div class="contents">

    <div class="inner_content">

        <h2 class="inner_content_title">Is Site Online</h2>

        <p class="inner_content_description">
            <u>On: 28-11-2016</u>
            &emsp;
            <u>Update: 29-11-2016</u>
            &emsp;
            <u>Version: 1.0</u>
        </p>

        <div class="zee-social-buttons" data-social-buttons-img="https://cdn.rawgit.com/krishnaTORQUE/Zee-Social-Buttons/master/zee-social-buttons.png"></div>

        <p>
            Check weather Website is Online or Offline
        </p>

        <form action="<?php echo $this->URL('FULL'); ?>" method="post" class="giv_name">
            <input type="text" class="field field_block giv_name" name="site_link" placeholder="Example: https://www.facebook.com" <?php echo (isset($_POST['site_link'])) ? 'value="' . $_POST['site_link'] . '"' : null; ?>/>
            <input type="submit" value="Check Website Status" class="btn btn_block btn_cbu giv_name site_btn" name="site_btn" />
        </form>

        <div class="site_result"><?php
            if (isset($_POST['site_btn'])) {

                require_once ROOT . 'helperclass/valid.php';
                $valid = new valid();

                if ($valid->url($_POST['site_link'])) {
                    $headers = get_headers($_POST['site_link'], 1);
                    $headers = preg_replace('/[^0-9 ]/', '', $headers[1]);
                    $headers = explode(' ', $headers);
                    if ($headers[1] >= 200 && $headers[1] < 400) {
                        echo '<div class="msg msg_success">Given Website is now <b>ONLINE</b></div>';
                    } else {
                        echo '<div class="msg msg_warn">Given Website is now <b>OFFLINE</b></div>';
                    }
                } else {
                    echo '<div class="msg msg_warn">Not a valid Website</div>';
                }
            }
            ?></div>

        <style type="text/css">
            .giv_name{
                margin: 10px 0;
                text-align: center;
                padding: 8px;
            }
        </style>

        <script type="text/javascript">
            window.addEventListener('load', function () {
                var site_btn = document.getElementsByClassName('site_btn')[0];
                site_btn.addEventListener('click', function () {
                    this.value = 'Loading ...';
                }, false);
            }, false);
        </script>

    </div>
</div>