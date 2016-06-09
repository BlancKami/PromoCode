<?php

require_once('/../config.php');

$PAGE->set_context(get_system_context());
$PAGE->set_pagelayout('admin');
$PAGE->set_title("About us");
$PAGE->set_heading("About us");
$PAGE->set_url($CFG->wwwroot.'/pages/about-us.php');

echo $OUTPUT->header();
include("about-us.html");
echo $OUTPUT->footer();
?>
