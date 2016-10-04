<?php require_once( 'admin/cms.php' ); ?>
    <cms:template title='Portfolio' clonable='1'>
        <cms:editable name='project_year' label='Year' type='text'></cms:editable>
        <cms:editable name='project_position' label='Position/Role' type='text'></cms:editable>
        <cms:editable name='project_description' label='Description' type='textarea'></cms:editable>
        <cms:editable name='project_image1' label='Image 1' type='image' desc='For best results upload images at 800px wide' width='800' height='500' crop='1' show_preview='1' preview_width='150'></cms:editable>
        <cms:editable name='project_image1_alt' label='Alternate Text for Image 1' type='textarea' desc='Add an alternate title for the image. It helps those with site impairment and if the image does not load.'></cms:editable>
        <cms:editable name='project_image2' label='Image 2' type='image' desc='For best results upload images at 800px wide' width='800' height='500' crop='1' show_preview='1' preview_width='150'></cms:editable>
        <cms:editable name='project_image2_alt' label='Alternate Text for Image 2' type='textarea' desc='Add an alternate title for the image. It helps those with site impairment and if the image does not load.'></cms:editable>
        <cms:editable name='project_image3' label='Image 3' type='image' desc='For best results upload images at 800px wide' width='800' height='500' crop='1' show_preview='1' preview_width='150'></cms:editable>
        <cms:editable name='project_image3_alt' label='Alternate Text for Image 3' type='textarea' desc='Add an alternate title for the image. It helps those with site impairment and if the image does not load.'></cms:editable>
        <cms:editable name='project_image4' label='Image 4' type='image' desc='For best results upload images at 800px wide' width='800' height='500' crop='1' show_preview='1' preview_width='150'></cms:editable>
        <cms:editable name='project_image4_alt' label='Alternate Text for Image 4' type='textarea' desc='Add an alternate title for the image. It helps those with site impairment and if the image does not load.'></cms:editable>
    </cms:template>
    <!DOCTYPE html>
    <html class="no-js" lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stefany Cambra - Portfolio</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=BenchNine" rel="stylesheet"> </head>

    <body>
        <div class="page-wrap">
            <cms:embed 'header.html' />
            <main>
                <div class="row">
                    <h2>Portfolio</h2> </div>
                <cms:pages masterpage='portfolio.php' paginate='1' limit='6'>
                    <div class="row portfolio-project">
                        <div class="small-12 medium-6 columns no-margin no-padding">
                            <div class="orbit" role="region" aria-label="Project Images" data-orbit data-auto-play="false" data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                                <ul class="orbit-container">
                                    <button class="orbit-previous"><span class="show-for-sr"></span>&#9664;&#xFE0E;</button>
                                    <button class="orbit-next"><span class="show-for-sr"></span>&#9654;&#xFE0E;</button>
                                    <li class="is-active orbit-slide"> <img class="orbit-image" src="<cms:show project_image1 />" alt="<cms:show project_image1_alt />"> </li>
                                    <li class="orbit-slide"> <img class="orbit-image" src="<cms:show project_image2 />" alt="<cms:show project_image2_alt />"> </li>
                                    <li class="orbit-slide"> <img class="orbit-image" src="<cms:show project_image3 />" alt="<cms:show project_image3_alt />"> </li>
                                    <li class="orbit-slide"> <img class="orbit-image" src="<cms:show project_image4 />" alt="<cms:show project_image4_alt />"> </li>
                                </ul>
                                <nav class="orbit-bullets">
                                    <button class="is-active" data-slide="0"><span class="show-for-sr"></span><span class="show-for-sr"></span></button>
                                    <button data-slide="1"><span class="show-for-sr"></span></button>
                                    <button data-slide="2"><span class="show-for-sr"></span></button>
                                    <button data-slide="3"><span class="show-for-sr"></span></button>
                                </nav>
                            </div>
                        </div>
                        <div class="small-12 medium-6 columns project-text">
                            <p class="show">
                                <cms:show k_page_title /> </p>
                            <p class="year">
                                <cms:show project_year /> </p>
                            <p class="playwright">
                                <cms:show project_position /> </p>
                            <p>
                                <cms:show project_description /> </p>
                        </div>
                    </div>
                </cms:pages>
            </main>
        </div>
        <cms:embed 'footer.html' />
        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.js"></script>
        <script>
            $(document).foundation('orbit', {
                timer_speed: 0
            });
        </script>
        <script>
            $(document).foundation();
        </script>
    </body>

    </html>
    <?php COUCH::invoke(); ?>