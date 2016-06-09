<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Layout - nav.
 * This layout is baed on a moodle site index.php file but has been adapted to show news items in a different
 * way.
 *
 * @package   theme_snap
 * @copyright Copyright (c) 2015 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

use theme_snap\renderables\settings_link;

?>

<!-- Added Institution and Become ... to navigation bar from orig -->
<?php

echo'
<head>
  <link rel="stylesheet" type="text/css" href="/moodle30/theme/snap/style/extra.css">
</head>


<header id="mr-nav" class="clearfix moodle-has-zindex">
<div class="pull-right">



<a href="" class="snap-login-button fixy-trigger">Institution</a> 
<a href="http://www.fintechschool.com/teach--mentor--advise.html" target="_blank" class="snap-login-button fixy-trigger">Become an Instructor</a> 
'
?>


<!-- Hide Signup Button if necessary, if not logged in or a guest user, sign up button will appear-->

<?php
    if (!isloggedin() || isguestuser()){
    echo"<a href='/login/signup.php' id='signup'>Sign Up</a>";
    }
?>

<?php 
    echo $OUTPUT->fixed_menu();
    $settingslink = new settings_link();
    echo $OUTPUT->render($settingslink);
?>
</div>

<?php
    $sitefullname = format_string($SITE->fullname);
    if (!empty($PAGE->theme->settings->logo)) {
       $sitefullname = '<span class="sr-only">'.format_string($SITE->fullname).'</span>';
    }
    echo '<a aria-label="'.get_string('home', 'theme_snap').'" href="'. s($CFG->wwwroot).'" id="logo" title="'.s(format_string($SITE->fullname)).'">'.$sitefullname.'</a>';
?>
<!-- changes 
<a href="http://localhost">
    <img src="/images/FTS_Logo_with_Text.png" style="height:75px; margin-top:-0.5em"/>
</a> --> 
</header>