<?php

require_once('/../config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('admin');
$PAGE->set_title("Institution");
$PAGE->set_heading("Institution");
$PAGE->set_url($CFG->wwwroot.'/pages/institution.php');

echo $OUTPUT->header();
include("institution.html");
echo $OUTPUT->footer();
?>
