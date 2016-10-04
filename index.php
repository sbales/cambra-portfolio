<?php require_once( 'admin/cms.php' ); ?>
    <cms:template title='Home'>
        <cms:editable name='main_headshot' type='image' label='Headshot' desc='For best results upload images at 1000px wide. Image will be cropped to a square.' width='1000' height='1000' crop='1' show_preview='1' preview_width='200' /> </cms:template>
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
            <cms:embed 'header.html' />
            <main>
                <div class="row landing-page">
                    <div class="medium-6 columns table">
                        <div class="table-cell">
                            <div><img class="signature" src="http://placehold.it/350x150">
                                <h3 class="center-align">Theatrician</h3></div> <a href="about.html" class="button secondary block">More About Me</a> <a href="contact.html" class="button block bold">Hire Me</a> </div>
                    </div>
                    <div class="hide-for-small-only medium-6 columns">
                        <div class="headshot-holder no-padding no-margin"> <img class="main-headshot" src="<cms:show main_headshot />" alt="A headshot of Stefany Cambra"> </div>
                    </div>
                </div>
            </main>
        </div>
        <cms:embed 'footer.html' />
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
        <script src="dist/objectFitPolyfill.basic.min.js"></script>
    </body>

    </html>
    <?php COUCH::invoke(); ?>