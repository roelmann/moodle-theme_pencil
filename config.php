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
 * Theme config file.
 *
 * @package    theme_pencil
 * @copyright  2016 Richard Oelmann
 * @copyright  theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Check the file is being called internally from within Moodle.
defined('MOODLE_INTERNAL') || die();

// Call the theme lib file.
require_once($CFG->dirroot . '/theme/waxed/lib.php');

// Theme name.
$THEME->name = 'pencil';

// Inherit from parent theme - Boost.
$THEME->parents = ['waxed','boost'];

// Call main theme scss - including the selected preset.
$THEME->scss = function($theme) {
    return theme_pencil_get_main_scss_content($theme);
};

// Docking is not currently supported in Boost family themes.
$THEME->enable_dock = false;

// Call css/scss processing functions and renderers.
$THEME->csstreepostprocessor = 'theme_pencil_css_tree_post_processor';
$THEME->prescsscallback = 'theme_pencil_get_pre_scss';
$THEME->extrascsscallback = 'theme_pencil_get_extra_scss';
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_FLATNAV;

// Additional theme options.
$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();
$THEME->requiredblocks = '';
