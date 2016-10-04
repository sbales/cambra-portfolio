<?php require_once( 'admin/cms.php' ); ?>
    <cms:template title='Contact Information' />
    <!DOCTYPE html>
    <html class="no-js" lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stefany Cambra - Contact</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet"> </head>

    <body>
        <div class="page-wrap">
            <cms:embed 'header.html' />
            <main>
                <div class="row no-margin no-padding">
                    <h2>Contact Stefany</h2>
                    <div class="medium-3 columns no-padding">
                        <p class="contact-info"><img class="contact-icon" src="icons/phone-icon.png">
                            <cms:editable name='Phone' type='textarea'>+1 (123) 456 7890</cms:editable>
                        </p>
                    </div>
                    <div class="medium-4 columns no-padding">
                        <p class="contact-info"><img class="contact-icon" src="icons/email-icon.png">
                            <cms:editable name='Email' type='textarea'>stefany.cambra@gmail.com</cms:editable>
                        </p>
                    </div>
                    <div class="medium-5 columns no-padding">
                        <p class="contact-info"><img class="contact-icon" src="icons/marker-icon.png"><cms:editable name='Address' type='textarea'>1234 Some Street Name, Plano Texas, 12345</cms:editable></p>
                    </div>
                    <form>
                        <div class="row">
                            <div class="medium-5 columns no-padding top-margin">
                                <input type="text" name="name" placeholder="NAME"> </div>
                            <div class="medium-6 medium-push-1 columns no-padding top-margin">
                                <input type="email" name="email" placeholder="EMAIL"> </div>
                            <textarea name="message" rows="3" placeholder="MESSAGE"></textarea>
                            <input type="submit" name="send" value="SEND"> </div>
                    </form>
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