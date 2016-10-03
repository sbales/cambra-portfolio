<?php require_once( 'admin/cms.php' ); ?>
    <cms:template clonable='1' title='Directing Credits' executable='0' />
    <cms:editable name="directed_show" type="text" label="Show" />
    <cms:editable name="directed_year" type="text" label="Year" />
    <cms:editable name="directed_playwright" type="text" label="Playwright" />
    <cms:editable name="directed_company" type="text" label="Company" />
    <?php COUCH::invoke(); ?>