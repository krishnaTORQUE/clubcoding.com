<?php
if (!defined('ROOT')) {
    require_once $_SERVER['ROOT_PATH'] . $_SERVER['ERROR_PATH'];
}
?>
<header>
    <div class="header_con">
        <div class="title">
            <a href="<?php echo $this->URL('APP'); ?>" title="Club Coding Home">
                <img src="<?php echo $this->URL('APP') . $this->PATH('ACTIVE_APP') . 'img/logo.png'; ?>" alt="Club Coding Home" class="title_logo" />
            </a>            
        </div>

        <div class="header_right">

            <div class="icons drop_nav drop_nav_d nav_icon">
                <div class="drop_down_box nav_group">                    
                    <div class="nav_sicons">
                        <a href="<?php echo $this->URL('APP'); ?>applications" class="nav_social_icons nav_social_icons_apps">Apps</a>
                        <a href="<?php echo $this->URL('APP'); ?>blog" class="nav_social_icons nav_social_icons_blog">Blog</a>
                        <a href="<?php echo $this->URL('APP'); ?>live" class="nav_social_icons nav_social_icons_live">Live</a>
                    </div>
                    <ul class="pagination">
                        <li><a href="<?php echo $this->URL('APP'); ?>about">About</a></li>
                        <li><a href="<?php echo $this->URL('APP'); ?>contact">Contact</a></li>
                    </ul>
                </div>                
            </div>

            <div class="marquee-lin blink">
                <marquee scrollamount="3"><a style="font-weight: bold;" href="<?php echo $this->URL('APP'); ?>about#donation">Help us to grow</a></marquee>
            </div>

        </div>
    </div>
</header>

<div class="body">