<?php
require 'ClassAutoLoad.php';
require_once 'forms/forms.php';
$ObjForm = new forms();     // create the form object
$ObjLayout = new layouts();
$ObjLayout->header($conf);
$ObjLayout->navbar($conf);
$ObjLayout->banner($conf);
$ObjLayout->form_frame($conf, $ObjForm);
$ObjLayout->footer($conf);