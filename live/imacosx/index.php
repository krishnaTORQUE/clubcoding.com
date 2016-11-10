<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8"/>
        <meta http-equiv="Content-Type" content="text/html"/>
        <meta http-equiv="Content-Style-Type" content="text/css"/>
        <meta http-equiv="Content-Script-Type" content="text/javascript"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />

        <title>iMAC OS X | Club Coding</title>
        <meta name="description" content="Live online demo of macintosh by Club Coding"/>
        <meta name="keywords" content="macintosh, mac,osx, live demo ios, online demo mac, club coding"/>
        <meta name="site_name" content="Club Coding"/>
        <meta name="application-name" content="iMac OS X"/>
        <meta name="author" content="Club Coding"/>
        <meta name="url" content="http://live.clubcoding.com/imacosx/"/>
        <meta name="page-last-update" content="12/09/2015" />

        <meta name="google" content="notranslate"/>
        <meta name="googlebot" content="noodp"/>
        <meta name="googlebot" content="index,dofollow"/>
        <meta name="googlebot" content="archive"/>
        <meta name="robots" content="index,dofollow"/>
        <meta name="robots" content="archive"/>

        <meta property="og:title" content="iMAC OS X | Club Coding"/>
        <meta property="og:description" content="Live online demo of macintosh by Club Coding"/>
        <meta property="og:url" content="http://live.clubcoding.com/imacosx/"/>
        <meta property="og:author" content="Club Coding" />
        <meta property="og:site_name" content="Club Coding"/>

        <link rel="stylesheet" type="text/css" href="css.css"/>

        <script type="text/javascript" src="jquery-lib.js"></script>
        <script type="text/javascript" src="js.js"></script>

    </head>
    <body>

        <div id="loginpage">
            <img id="apple-bootlogo" src="img/apple-bootlogo.png"/>
            <img id="spinnerSmall" src="img/spinnerSmall.gif"/>
        </div>

        <div id="menubar">

            <ul id="menulink">
                <li id="apple-logo" class="drop-act">
                    <ul class="dropdown" style="margin-top: 20px;">
                        <li id="aboutthismac_menu">About This Mac</li>
                        <li>Software Updates</li>
                        <li>App Store</li>
                    </ul>
                </li>
                <li><b>Finder</b></li>
                <li>File</li>
                <li>Edit</li>
                <li>View</li>
                <li>Go</li>
                <li>Window</li>
                <li class="drop-act">Help
                    <ul class="dropdown">
                        <li id="aboutthisproject_menu">About This Project</li>
                    </ul>
                </li>
            </ul>

            <div id="notifylink">

                <a id="wifi" href="#"></a>

                <div id="notifydate"></div>

                <div id="users">Club Coding</div>



            </div>

        </div>

        <!--header end -->


        <div id="body">

            <div class="dialoguebox_con" id="aboutthismac">
                <div class="dialoguebox_title">
                    <span class="dialoguebox_btns">
                        <span class="db_close_btn"></span>
                        <span class="db_mini_btn"></span>
                        <span class="db_restore_btn"></span>
                    </span>
                    About This Mac
                </div>
                <div class="dialoguebox_body">
                    <img style="margin-left: 15px" src="img/MacOSX.png"/>

                    <h1>Mac OS X</h1>

                    <p class="version">Version 10.9</p>

                    <a href="#" class="w-btn">Software Update</a>

                    <br/><br/>

                    <p><b>Processor</b> 2.3 GHz Intel Core 2 Duo</p>

                    <br/>

                    <p><b>Memory</b> 4 GB 1067 Mhz DDR3</p>

                    <br/>

                    <p><b>Startup Disk</b> Macintosh HD</p>

                    <br/>

                    <a href="#" class="w-btn">More Info</a>

                    <br/><br/>

                    <p style="color: #bbb;font-size: 10px;">TM and © 1983-2011 Apple Inc</p>

                    <p style="color: #bbb;font-size: 10px;">All Rights Reserved</p>


                </div>
            </div>

            <div class="dialoguebox_con" id="aboutthisproject">
                <div class="dialoguebox_title">
                    <span class="dialoguebox_btns">
                        <span class="db_close_btn"></span>
                        <span class="db_mini_btn"></span>
                        <span class="db_restore_btn"></span>
                    </span>
                    About This Project
                </div>
                <div class="dialoguebox_body">

                    <img style="margin-left: 15px;" src="img/cc-logo.png"/>

                    <h1>iMAC OS X</h1>

                    <p class="version">Version 1.1</p>

                    <a href="http://www.clubcoding.com" target="_blank" class="w-btn">By Club Coding</a>

                    <br/><br/>

                    <p>In this project I tried to maximize the use of CSS3 and JavaScript.</p>

                    <p>Modern Browser Supported</p>

                    <p>HTML 5 and CSS3</p>

                    <p>Use a jQuery UI Draggable plugin</p>

                    <br/>

                    <a href="http://www.varphp.com/macosx" class="w-btn">More Info</a>

                    <br/><br/>

                </div>
            </div>

            <div class="dialoguebox_con" id="aboutfinder">
                <div class="dialoguebox_title">
                    <span class="dialoguebox_btns">
                        <span class="db_close_btn"></span>
                        <span class="db_mini_btn"></span>
                        <span class="db_restore_btn"></span>
                    </span>
                    About Finder
                </div>
                <div class="dialoguebox_body">
                    <img style="margin-left: 15px;" src="img/FinderIcon.png">

                    <h1>Finder</h1>

                    <p class="version">version 10.7.1</p>

                    <br/>

                    <p>The Macintosh Web Experience</p>

                    <br/>

                    <p class="version" style="font-size: 10px;">TM and © 1983-2011 Apple Inc</p>

                    <p class="version" style="font-size: 10px;">All Rights Reserved</p>

                </div>
            </div>


        </div>

        <!--body end ------------------ -->


        <div id="dockbar">

            <img id="aboutfinder_menu" src="img/FinderIcon.png"/>
            <img src="img/launchPad.png"/>
            <img src="img/expose.png"/>
            <img src="img/appstore.png"/>
            <img src="img/Safari.png"/>
            <img src="img/facetime.png"/>
            <img src="img/address.png"/>
            <img src="img/preview.png"/>
            <img src="img/iTunes.png"/>
            <img src="img/preferences.png"/>
            <img src="img/trash.png"/>

        </div>

    </body>
</html>