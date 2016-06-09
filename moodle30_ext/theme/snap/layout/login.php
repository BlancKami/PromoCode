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
 * Layout - default.
 *
 * @package   theme_snap
 * @copyright Copyright (c) 2015 Moodlerooms Inc. (http://www.moodlerooms.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
include(__DIR__.'/header.php');
?>

<!-- Link CSS -->
<head>
  <link rel="stylesheet" type="text/css" href="/moodle30/theme/snap/style/extra.css">
</head>

<!-- moodle js hooks -->
<div id="page">
<div id="page-content">
<!--
////////////////////////// MAIN  ///////////////////////////////
-->
<main id="moodle-page" class="clearfix">
<div id="page-header" class="clearfix">
</div>

<section id="region-main" style="float:right;">
<?php
echo $OUTPUT->main_content();
?>
</section>


<section class="para_login">
	<div id="div_login">
		<h1 class = "para_login"> Is this your first time here? </h1>
		<p> Hi!</p>
		<p> If you have already have an account id and password/ temporary password, log in by filling information in the box to the right.</p>
		<p> If you don’t have an account id, for full access to courses at the FinTech School, take a minute to create a new account for yourself. </p>
		<p> Here are the steps: Fill out the <a id= "link_color1" href ="https://sandbox-fts.moonami.com/login/signup.php">New Account</a> form with your details. </p>
		<p>
			<ol>
				<li> An email will be immediately sent to your email address.</li>
				<li> Read your email, and click on the web link it contains.</li>
				<li> Your account will be confirmed and you will be logged in. </li>
				<li> Now, you can access and enroll in available courses. From now on you will only need to enter your personal username and password (in the form on this page) to log in and access any course you have enrolled in.</li>
			</ol>		
	</div>
</section>


</main>
</div>
</div>
<!-- close moodle js hooks -->

<?php include(__DIR__.'/footer.php'); ?>
