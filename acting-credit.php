<?php require_once( 'admin/cms.php' ); ?>
    <cms:template clonable='1' title='Acting Credits' executable='0' />
    <cms:editable name="acted_show" type="text" label="Show" />
    <cms:editable name="acted_year" type="text" label="Year" />
    <cms:editable name="acted_role" type="text" label="Role" />
    <cms:editable name="acted_company" type="text" label="Company" />
    <?php COUCH::invoke(); ?>