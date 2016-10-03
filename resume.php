<?php require_once( 'admin/cms.php' ); ?>
    <cms:template title='Resume' />
    <!DOCTYPE html>
    <html class="no-js" lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stefany Cambra - Resume</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet"> </head>

    <body>
        <div class="page-wrap">
            <header>
                <ul class="nav-bar button-group">
                    <li class="hollow button primary"><a href="about">About</a></li>
                    <li class="hollow button primary"><a href="resume">Resume</a></li>
                    <li class="hollow button primary"><a href="index">Home</a></li>
                    <li class="hollow button primary"><a href="portfolio">Portfolio</a></li>
                    <li class="hollow button primary"><a href="contact">Contact</a></li>
                </ul>
            </header>
            <main>
                <div class="row">
                    <h2>Resume</h2>
                    <div class="row">
                        <p class="resume-links"><a href="#directing">Directing</a> | <a href="#acting">Acting</a> | <a href="#management">Management</a> | <a href="#design">Design</a> | <a href="#qualifications">Qualifications</a> </p>
                    </div>
                    <div class="row credits" id="directing">
                        <h5>Directing</h5>
                        <div class="row no-margin no-padding ">
                            <cms:pages masterpage='directing-credit.php' paginate='1' limit='6'>
                                <div class="thirty-three med-padding">
                                    <p class="show left">
                                        <cms:show directed_show /> </p>
                                    <p class="year right">
                                        <cms:show directed_year /> </p>
                                    <p class="playwright">By
                                        <cms:show directed_playwright /> </p>
                                    <p class="company">
                                        <cms:show directed_company /> </p>
                                </div>
                            </cms:pages>
                        </div>
                    </div>
                    <div class="row credits" id="directing">
                        <h5>Management</h5>
                        <div class="row no-margin no-padding ">
                            <cms:pages masterpage='management-credit.php' paginate='1' limit='6'>
                                <div class="thirty-three med-padding">
                                    <p class="show left">
                                        <cms:show management_show /> </p>
                                    <p class="year right">
                                        <cms:show management_year /> </p>
                                    <p class="playwright">
                                        <cms:show management_role /> </p>
                                    <p class="company">
                                        <cms:show management_company /> </p>
                                </div>
                            </cms:pages>
                        </div>
                    </div>
                    <div class="row credits" id="acting">
                        <h5>Acting</h5>
                        <div class="row no-margin no-padding ">
                            <cms:pages masterpage='acting-credit.php' paginate='1' limit='6'>
                                <div class="thirty-three med-padding">
                                    <p class="show left">
                                        <cms:show acted_show /> </p>
                                    <p class="year right">
                                        <cms:show acted_year /> </p>
                                    <p class="playwright">
                                        <cms:show acted_role /> </p>
                                    <p class="company">
                                        <cms:show acted_company /> </p>
                                </div>
                            </cms:pages>
                        </div>
                    </div>
                    <div class="row credits" id="design">
                        <h5>Design</h5>
                        <div class="row no-margin no-padding ">
                            <cms:pages masterpage='design-credit.php' paginate='1' limit='6'>
                                <div class="thirty-three med-padding">
                                    <p class="show left">
                                        <cms:show design_show /> </p>
                                    <p class="year right">
                                        <cms:show design_year /> </p>
                                    <p class="playwright">
                                        <cms:show design_role /> </p>
                                    <p class="company">
                                        <cms:show design_company /> </p>
                                </div>
                            </cms:pages>
                        </div>
                    </div>
                    <div class="row credits" id="qualifications">
                        <h5>Qualifications</h5>
                        <cms:pages masterpage='qualifications-credit.php' paginate='1' limit='6'>
                        <p class="qualification"><cms:show qualification_credit /><br></p>
                            </cms:pages>
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
    </body>

    </html>
    <?php COUCH::invoke(); ?>