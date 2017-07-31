<?php
require_once 'include/database.php';
require_once 'include/functions.php';
?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />

    <title>TestSearch</title>

    <link rel="stylesheet" type="text/css" href="style.css" />

    <link id="changetheme" rel="stylesheet" type="text/css" href="styles/bg.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.tipsy.js"></script>
    <script src="js/template.js"></script>


</head>
<body>
<div class="wrapper">
    <div class="headmenu">
        <a href="#" class="logotype">Test Search!</a>
        <div class="menus">
            <ul>
                <li><a href="#">About this site</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div id="changeStyle" class="changeStyle" style="display: none;">
            <div class="title">Смена оформления <div onclick="expandit('changeStyle')" class="close"></div></div>
            <div class="changeCont">
                <div class="Style" onclick="ChangeTheme('styles/bg.css')" style="background-color: #56697C;"></div>
                <div class="Style" onclick="ChangeTheme('styles/bg_1.css')" style="background-color: #3598DB;"></div>
                <div class="Style" onclick="ChangeTheme('styles/bg_2.css')" style="background-color: #2DCC70;"></div>
                <div class="Style" onclick="ChangeTheme('styles/bg_3.css')" style="background-color: #E77E23;"></div>
                <div class="Style" onclick="ChangeTheme('styles/bg_4.css')" style="background-color: #E84C3D;"></div>
            </div>
        </div>

        <form class="form-wrapper" action="/result.php" name="search" method="get" >

            <input id="txt_search" type="text"  name="query" x-webkit-speech="" speech="" placeholder="What are you looking for?" required="" />
            <button type="submit">Search</button>

            <div class="dopolnenie">
                <a>I'm Feeling Lucky!</a>

            </div>
        </form>

        </form>
    </div>
    <div class="footer">
        <div class="powered_by">Working on it ...</div>
        <div class="copyright">&copy BaLiK & Call Me Jesus | <a href="mailto:support@presebook.com">Support</a></div>
    </div>
</div>
</body>
</html>