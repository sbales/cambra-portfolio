<?php require_once( 'admin/cms.php' ); ?>
    <cms:template title='About' />
    <!DOCTYPE html>
    <html class="no-js" lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stefany Cambra - About</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet"> </head>

    <body>
        <div class="page-wrap">
            <header class="button-bar">
                <ul class="button-group nav-bar">
                    <li class="hollow button primary"><a href="about">About</a></li>
                    <li class="hollow button primary"><a href="resume">Resume</a></li>
                    <li class="hollow button primary"><a href="index">Home</a></li>
                    <li class="hollow button primary"><a href="portfolio">Portfolio</a></li>
                    <li class="hollow button primary"><a href="contact">Contact</a></li>
                </ul>
            </header>
            <main>
                <div class="row">
                    <div class="small-12 medium-6 columns headshots-col">
                        <div class="row two-thirds">
                            <div class="small-8 medium-8 columns full-height small-padding single-image">
                                <div class="headshot-holder no-padding no-margin"> <img class="main-headshot" data-object-fit src="http://placehold.it/600x1200"> </div>
                            </div>
                            <div class="hide-for-small-only medium-4 columns full-height small-padding">
                                <div class="half-headshot-holder no-padding"> <img class="main-headshot" data-object-fit src="http://placehold.it/300x900"> </div>
                                <div class="half-headshot-holder no-padding no-margin"> <img class="main-headshot" data-object-fit src="http://placehold.it/300x900"> </div>
                            </div>
                        </div>
                        <div class="hide-for-small-only row one-third">
                            <div class="hide-for-small-only medium-8 columns full-height small-padding">
                                <div class="headshot-holder no-padding no-margin"> <img class="main-headshot" data-object-fit src="http://placehold.it/300x300"> </div>
                            </div>
                            <div class="hide-for-small-only medium-4 columns full-height small-padding">
                                <div class="headshot-holder no-padding no-margin"> <img class="main-headshot" data-object-fit src="http://placehold.it/300x300"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <h2>About Stefany</h2>
                        <p><cms:editable name='main_content' type='textarea' label='Content'>
                            Some stuff about Stefany that is important to her. Some stuff about Stefany this importatnt to people reading this page. A brief explanation of her past and present stuff, what she wants to do, and how she can HELP you do it too!
                        </cms:editable></p> <a href="portfolio" class="button secondary half">See my<br>work</a> <a href="resume" class="button secondary half">See my<br>expereince</a> <a class="contact" href="contact">Get in touch!</a> </div>
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
    </body>

    </html>
    <?php COUCH::invoke(); ?>