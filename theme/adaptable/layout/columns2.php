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
 * Version details
 *
 * @package    theme_adaptable
 * @copyright  2015-2016 Jeremy Hopkins (Coventry University)
 * @copyright  2015-2016 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

require_once(dirname(__FILE__) . '/includes/header.php');
$left = theme_adaptable_get_block_side();
?>

<div class="container outercont">
    <div id="page-content" class="row-fluid">
        <?php echo $OUTPUT->page_navbar(false); ?>
<?php

// Left sidebar.
if (($left == 1) && $PAGE->blocks->region_has_content('side-post', $OUTPUT)) {
    echo $OUTPUT->blocks('side-post', 'span3 desktop-first-column');
}

// Main Region.
if ($PAGE->blocks->region_has_content('side-post', $OUTPUT)) {
    if ($left == 1) {
        echo '<section id="region-main" class="span9">';
    } else {
        echo '<section id="region-main" class="span9" style="margin: 0;">';
    }
}
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>

<?php
// Right Sidebar.
if (($left == 0) && $PAGE->blocks->region_has_content('side-post', $OUTPUT)) {
    echo $OUTPUT->blocks('side-post', 'span3');
}
?>

    </div>
    </div>

    <?php
    require_once(dirname(__FILE__) . '/includes/footer.php');
