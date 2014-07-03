<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FootballUni</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/galleria-1.3.6.min.js"></script>
    </head>
    <body>
        <header>
            <div class="color-header">
                <a href="index.html"><img src="images/logo.png"></a>
            </div>
            <div class="row">
                <nav>
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <div class="navitem">
                            <a href="?p=" >Home</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <div class="navitem">
                            <a href="?p=gallery">Gallery</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <div class="navitem">
                            <a href="?p=videos" class="active">Video</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <div class="navitem">
                            <a href="?p=audios">Audio</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <div class="navitem">
                            <a href="?p=team">Team</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-2 col-xs-6">
                        <div class="navitem">
                            <a href="?p=about">About Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <main>
                <?php
                $p = $_GET['p'] ;
                if (empty($p)) {
                include "home.html";
                }
                if ($p == 'gallery') {
                include "gallery.html";
                }
                if ($p == 'videos') {
                include "video.html";
                }
                if ($p == 'audios') {
                include "audio.html";
                }
                if ($p == 'team') {
                include "team.html";
                }
                if ($p == 'about') {
                include "aboutus.html";
                }
                ?>
            </section>
            </main>
        </div>
        <div class="col-md-4">
            <aside>
                <script type="text/javascript" src="js/calendar.js"></script>
                <ul class="social-icons">
                    <li class="twitter">
                        <a title="Twitter" target="_blank" href="https://twitter.com/softunibg"><img alt="Twitter" src="images/twitter.png"></a>
                    </li>
                    <li class="fb">
                        <a title="Facebook" target="_blank" href="https://www.facebook.com/SoftwareUniversity"><img alt="Facebook" src="images/facebook.png"></a>
                    </li>
                    <li class="googleplus">
                        <a title="Google Plus" target="_blank" href="https://plus.google.com/+SoftuniBg"><img alt="Google Plus" src="images/googleplus.png"></a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    
    <footer>
        <p class="team">2014-All rights reserved team DEATHWING  &copy;<br>
        Contact information: <a href="mailto:deathwing@gmail.com">deathwing@gmail.com</a>
        </p>
    </footer>
</body>
</html>