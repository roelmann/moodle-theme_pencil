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
 * Colours settings page file.
 *
 * @package    theme_pencil
 * @copyright  2016 Richard Oelmann
 * @copyright  theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$page = new admin_settingpage('theme_pencil_colours', get_string('colours_settings', 'theme_pencil'));

// Raw SCSS to include before the content.
$setting = new admin_setting_scsscode('theme_pencil/scsspre',
    get_string('rawscsspre', 'theme_pencil'), get_string('rawscsspre_desc', 'theme_pencil'), '', PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $brandprimary.
$name = 'theme_pencil/brandprimary';
$title = get_string('brandprimary', 'theme_pencil');
$description = get_string('brandprimary_desc', 'theme_pencil');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $brandsuccess.
$name = 'theme_pencil/brandsuccess';
$title = get_string('brandsuccess', 'theme_pencil');
$description = get_string('brandsuccess_desc', 'theme_pencil');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $brandwarning.
$name = 'theme_pencil/brandwarning';
$title = get_string('brandwarning', 'theme_pencil');
$description = get_string('brandwarning_desc', 'theme_pencil');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $branddanger.
$name = 'theme_pencil/branddanger';
$title = get_string('branddanger', 'theme_pencil');
$description = get_string('branddanger_desc', 'theme_pencil');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $brandinfo.
$name = 'theme_pencil/brandinfo';
$title = get_string('brandinfo', 'theme_pencil');
$description = get_string('brandinfo_desc', 'theme_pencil');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Variable $graybase.
$name = 'theme_pencil/brandgraybase';
$title = get_string('brandgray', 'theme_pencil');
$description = get_string('brandgray_desc', 'theme_pencil');
$setting = new admin_setting_configcolourpicker($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);


// Raw SCSS to include after the content.
$setting = new admin_setting_scsscode('theme_pencil/scss', get_string('rawscss', 'theme_pencil'),
    get_string('rawscss_desc', 'theme_pencil'), '', PARAM_RAW);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
