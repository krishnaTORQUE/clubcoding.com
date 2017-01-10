<?php
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>

<div class="contents">

    <div class="inner_content">
        <h2 class="inner_content_title">Don't be a stranger. Get in touch!</h2>

        <p class="line-sep">
            We would love to hear from you.
            <br/>
            Contact: For Project, New Post, New App, Bug Report or Advertise/Sponsor.
        </p>

        <ul class="group group_h">
            <li>
                <a href="mailto:support@clubcoding.com" title="support@clubcoding.com" class="nav_social_icons nav_social_icons_email">Email</a>
            </li>
            <li>
                <a href="https://www.facebook.com/clubcoding" class="nav_social_icons nav_social_icons_faceboook" target="_blank" rel="nofollow">Facebook</a>
            </li>
            <li>
                <a href="https://twitter.com/krishnatorque" class="nav_social_icons nav_social_icons_twitter" target="_blank" rel="nofollow">Twitter</a>
            </li>
            <li>
                <a href="https://plus.google.com/+Clubcoding/" class="nav_social_icons nav_social_icons_google_plus" target="_blank" rel="nofollow">Google+</a>
            </li>
            <li>
                <a href="https://github.com/krishnaTORQUE/" class="nav_social_icons nav_social_icons_github" target="_blank" rel="nofollow">Github</a>
            </li>
        </ul>

        <form class="contact_form" action="<?php echo $this->URL('FULL'); ?>" method="post">
            <input class="field nam_fild email_name" type="text" placeholder="Name"/>
            <input class="field nam_fild email_email" type="text" placeholder="Email"/>
            <textarea class="field field_block email_msg" placeholder="What's on your mind?"></textarea>
            <input class="btn btn_cbu btn_block email_send_btn" type="submit" value="Send Email"/>
        </form>

        <div class="contact_form return_msg"></div>

    </div>

</div>