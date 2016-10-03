<?php require_once( 'admin/cms.php' ); ?>
    <cms:template clonable='1' title='Design Credits' executable='0' />
    <cms:editable name="design_show" type="text" label="Show" />
    <cms:editable name="design_year" type="text" label="Year" />
    <cms:editable name="design_role" type="text" label="Role" />
    <cms:editable name="design_company" type="text" label="Company" />
    <?php COUCH::invoke(); ?>