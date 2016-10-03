<?php require_once( 'admin/cms.php' ); ?>
    <cms:template clonable='1' title='Management Credits' executable='0' />
    <cms:editable name="management_show" type="text" label="Show" />
    <cms:editable name="management_year" type="text" label="Year" />
    <cms:editable name="management_role" type="text" label="Role" />
    <cms:editable name="management_company" type="text" label="Company" />
    <?php COUCH::invoke(); ?>