<?php require_once( 'admin/cms.php' ); ?>
    <cms:template title='About'>
        <cms:editable name='main_content' type='textarea' label='Content' /> 
        <cms:editable name='large_headshot' type='image' label='Large Headshot' desc='For best results upload images at 1000px wide. Image will be cropped to a 1000x1000 square.' width='1000' height='1000' crop='1' show_preview='1' preview_width='100' />
        <cms:editable name='rec_headshot' type='image' label='Rectangle Headshot' desc='For best results upload images at 1000px wide. Image will be cropped to a 1000x333 rectangle.' width='1000' height='333' crop='1' show_preview='1' preview_width='100' />
        <cms:editable name='square_headshot1' type='image' label='Square Headshot 1' desc='For best results upload images at 600px wide. Image will be cropped to a 600x600 square.' width='600' height='600' crop='1' show_preview='1' preview_width='100' />
        <cms:editable name='square_headshot2' type='image' label='Square Headshot 2' desc='For best results upload images at 600px wide. Image will be cropped to a 600x600 square.' width='600' height='600' crop='1' show_preview='1' preview_width='100' />
        <cms:editable name='square_headshot3' type='image' label='Square Headshot 3' desc='For best results upload images at 600px wide. Image will be cropped to a 600x600 square.' width='600' height='600' crop='1' show_preview='1' preview_width='100' />
</cms:template>
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
            <cms:embed 'header.html' />
            <main>
                <div class="row">
                    <div class="small-12 medium-6 columns headshots-col">
                        <div class="row two-thirds">
                            <div class="small-8 medium-8 columns full-height small-padding single-image">
                                <div class="headshot-holder no-padding no-margin"> <img class="main-headshot" data-object-fit src="<cms:show large_headshot />"> </div>
                            </div>
                            <div class="hide-for-small-only medium-4 columns full-height small-padding">
                                <div class="half-headshot-holder no-padding"> <img class="main-headshot" data-object-fit src="<cms:show square_headshot1 />"> </div>
                                <div class="half-headshot-holder no-padding no-margin"> <img class="main-headshot" data-object-fit src="<cms:show square_headshot2 />"> </div>
                            </div>
                        </div>
                        <div class="hide-for-small-only row one-third">
                            <div class="hide-for-small-only medium-8 columns full-height small-padding">
                                <div class="headshot-holder no-padding no-margin"> <img class="main-headshot" data-object-fit src="<cms:show rec_headshot />"> </div>
                            </div>
                            <div class="hide-for-small-only medium-4 columns full-height small-padding">
                                <div class="headshot-holder no-padding no-margin"> <img class="main-headshot" data-object-fit src="<cms:show square_headshot3 />"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-6 columns">
                        <h2>About Stefany</h2>
                        <p>
                            <cms:show main_content /> </p> <a href="portfolio" class="button secondary half">See my<br>work</a> <a href="resume" class="button secondary half">See my<br>expereince</a> <a class="contact" href="contact">Get in touch!</a> </div>
                </div>
            </main>
        </div>
        <cms:embed 'footer.html' />
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>

    </html>
    <?php COUCH::invoke(); ?>