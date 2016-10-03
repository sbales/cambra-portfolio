<?php require_once( 'admin/cms.php' ); ?>
<cms:template title='Home' />

<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stefany Cambra Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet"> </head>

<body>
    <div class="page-wrap">
        <header class="button-bar">
            <ul class="button-group nav-bar">
                <li class="hollow button primary"><a href="about">About</a></li><li class="hollow button primary"><a href="resume">Resume</a></li><li class="hollow button primary"><a href="index">Home</a></li><li class="hollow button primary"><a href="portfolio">Portfolio</a></li><li class="hollow button primary"><a href="contact">Contact</a></li>
            </ul>
        </header>
        <main>
            <div class="row landing-page">
                <div class="medium-6 columns table">
                    <div class="table-cell">
                        <div><img class="signature" src="http://placehold.it/350x150">
                            <h3 class="center-align">Theatrician</h3></div> <a href="about.html" class="button secondary block">More About Me</a> <a href="contact.html" class="button block bold">Hire Me</a> </div>
                </div>
                <div class="hide-for-small-only medium-6 columns">
                    <div class="headshot-holder no-padding no-margin"> <img class="main-headshot" src="http://placehold.it/1000x1000"> </div>
                </div>
            </div>
        </main>
    </div>
    <footer>
        <div class="row">
            <div class="medium-6 columns"> <a class="footer-link" href="http://www.steviebales.com">©Stevie Bales 2016</a> </div>
            <div class="medium-6 columns"> </div>
        </div>
    </footer>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
    <script src="dist/objectFitPolyfill.basic.min.js"></script>
</body>

</html>
<?php COUCH::invoke(); ?>