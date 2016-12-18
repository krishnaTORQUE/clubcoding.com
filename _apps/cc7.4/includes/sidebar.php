<?php
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>
<div class="sidebar">

    <?php
    if (isset($fb_sidebar)) {
        ?>

        <div>
            <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=320252008096688";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-page" data-href="https://www.facebook.com/clubcoding/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/clubcoding/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/clubcoding/">Club Coding</a></blockquote></div>

            <br/>
        </div>

        <?php
    }
    ?>

    <div class="copy-right">
        2012 - <?php echo date('Y'); ?> &copy; Club Coding
    </div>
</div>