<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| File Category: Core Rewrite Modules for 7.03
| Author: Hien (Frederick MC Chan)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) {
	die("Access Denied");
}
$regex = array(
	"%stype%" => "([0-9a-zA-Z-_]+)",
	"%stext%" => "([0-9a-zA-Z -_]+)",
	"%method%" => "([0-9a-zA-Z-_]+)",
	"%datelimit%" => "([0-9]+)",
	"%fields%" => "([0-9]+)",
	"%sort%" => "([a-zA-Z-_]+)",
	"%order%" => "([0-9]+)",
	"%chars%" => "([a-zA-Z-_]+)",
	"%forum_id%" => "([0-9]+)"
);

$pattern = array(
	"search" => "search.php",
	"search/%stype%" => "search.php?stype=%stype%",
	"search/%stype%/%method%/%datelimit%/%fields%/%sort%/%order%/%chars%/%forum_id%" => "search.php?stype=%stype%&amp;stext=%stext%&amp;method=%method%&amp;datelimit=%datelimit%&amp;fields=%fields%&amp;sort=%sort%&amp;order=%order%&amp;chars=%chars%&amp;forum_id=%forum_id%&amp;"
);

?>