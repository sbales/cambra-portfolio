<?php require_once( 'admin/cms.php' ); ?>
    <cms:template title='Resume'>
        <cms:repeatable name='directing_credits' label='Directing Credits'>
            <cms:editable name="directed_show" type="text" label="Show" />
            <cms:editable name="directed_year" type="text" label="Year" />
            <cms:editable name="directed_playwright" type="text" label="Playwright" />
            <cms:editable name="directed_company" type="text" label="Company" /> </cms:repeatable>
        <cms:repeatable name='management_credits' label='Management Credits'>
            <cms:editable name="management_show" type="text" label="Show" />
            <cms:editable name="management_year" type="text" label="Year" />
            <cms:editable name="management_role" type="text" label="Role" />
            <cms:editable name="management_company" type="text" label="Company" /> </cms:repeatable>
        <cms:repeatable name='acting_credits' label='Acting Credits'>
            <cms:editable name="acted_show" type="text" label="Show" />
            <cms:editable name="acted_year" type="text" label="Year" />
            <cms:editable name="acted_role" type="text" label="Role" />
            <cms:editable name="acted_company" type="text" label="Company" /> </cms:repeatable>
        <cms:repeatable name='design_credits' label='Design Credits'>
            <cms:editable name="design_show" type="text" label="Show" />
            <cms:editable name="design_year" type="text" label="Year" />
            <cms:editable name="design_role" type="text" label="Role" />
            <cms:editable name="design_company" type="text" label="Company" /> </cms:repeatable>
        <cms:repeatable name='qualification_credits' label='Qualifications'>
            <cms:editable name="qualification_credit" type="nicedit" label="" /> </cms:repeatable>
    </cms:template>
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
            <cms:embed 'header.html' />
            <main>
                <div class="row">
                    <h2>Resume</h2>
                    <div class="row">
                        <p class="resume-links"><a href="#directing">Directing</a> | <a href="#acting">Acting</a> | <a href="#management">Management</a> | <a href="#design">Design</a> | <a href="#qualifications">Qualifications</a> </p>
                    </div>
                    <div class="row credits" id="directing">
                        <h5>Directing</h5>
                        <div class="row no-margin no-padding ">
                            <cms:show_repeatable 'directing_credits'>
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
                            </cms:show_repeatable>
                        </div>
                    </div>
                    <div class="row credits" id="directing">
                        <h5>Management</h5>
                        <div class="row no-margin no-padding ">
                            <cms:show_repeatable 'management_credits'>
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
                            </cms:show_repeatable>
                        </div>
                    </div>
                    <div class="row credits" id="acting">
                        <h5>Acting</h5>
                        <div class="row no-margin no-padding ">
                            <cms:show_repeatable 'acting_credits'>
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
                            </cms:show_repeatable>
                        </div>
                    </div>
                    <div class="row credits" id="design">
                        <h5>Design</h5>
                        <div class="row no-margin no-padding ">
                            <cms:show_repeatable 'design_credits'>
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
                            </cms:show_repeatable>
                        </div>
                    </div>
                    <div class="row credits" id="qualifications">
                        <h5>Qualifications</h5>
                        <cms:show_repeatable 'qualification_credits'>
                            <p class="qualification">
                                <cms:show qualification_credit />
                                <br> </p>
                        </cms:show_repeatable>
                    </div>
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