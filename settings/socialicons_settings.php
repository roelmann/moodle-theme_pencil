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
 * Social networking settings page file.
 *
 * @package    theme_pencil
 * @copyright  2016 Richard Oelmann
 * @copyright  theme_boost - MoodleHQ
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* Social Network Settings */
$page = new admin_settingpage('theme_pencil_social', get_string('socialheading', 'theme_pencil'));
$page->add(new admin_setting_heading('theme_pencil_social', get_string('socialheadingsub', 'theme_pencil'),
        format_text(get_string('socialdesc' , 'theme_pencil'), FORMAT_MARKDOWN)));

// Website url setting.
$name = 'theme_pencil/website';
$title = get_string('website', 'theme_pencil');
$description = get_string('websitedesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Blog url setting.
$name = 'theme_pencil/blog';
$title = get_string('blog', 'theme_pencil');
$description = get_string('blogdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Facebook url setting.
$name = 'theme_pencil/facebook';
$title = get_string(        'facebook', 'theme_pencil');
$description = get_string(      'facebookdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Flickr url setting.
$name = 'theme_pencil/flickr';
$title = get_string('flickr', 'theme_pencil');
$description = get_string('flickrdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Twitter url setting.
$name = 'theme_pencil/twitter';
$title = get_string('twitter', 'theme_pencil');
$description = get_string('twitterdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Google+ url setting.
$name = 'theme_pencil/googleplus';
$title = get_string('googleplus', 'theme_pencil');
$description = get_string('googleplusdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// LinkedIn url setting.
$name = 'theme_pencil/linkedin';
$title = get_string('linkedin', 'theme_pencil');
$description = get_string('linkedindesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Tumblr url setting.
$name = 'theme_pencil/tumblr';
$title = get_string('tumblr', 'theme_pencil');
$description = get_string('tumblrdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Pinterest url setting.
$name = 'theme_pencil/pinterest';
$title = get_string('pinterest', 'theme_pencil');
$description = get_string('pinterestdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Instagram url setting.
$name = 'theme_pencil/instagram';
$title = get_string('instagram', 'theme_pencil');
$description = get_string('instagramdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// YouTube url setting.
$name = 'theme_pencil/youtube';
$title = get_string('youtube', 'theme_pencil');
$description = get_string('youtubedesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Vimeo url setting.
$name = 'theme_pencil/vimeo';
$title = get_string('vimeo', 'theme_pencil');
$description = get_string('vimeodesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Skype url setting.
$name = 'theme_pencil/skype';
$title = get_string('skype', 'theme_pencil');
$description = get_string('skypedesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// General social url setting 1.
$name = 'theme_pencil/social1';
$title = get_string('sociallink', 'theme_pencil');
$description = get_string('sociallinkdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 1.
$name = 'theme_pencil/socialicon1';
$title = get_string('sociallinkicon', 'theme_pencil');
$description = get_string('sociallinkicondesc', 'theme_pencil');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 2.
$name = 'theme_pencil/social2';
$title = get_string('sociallink', 'theme_pencil');
$description = get_string('sociallinkdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 2.
$name = 'theme_pencil/socialicon2';
$title = get_string('sociallinkicon', 'theme_pencil');
$description = get_string('sociallinkicondesc', 'theme_pencil');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// General social url setting 3.
$name = 'theme_pencil/social3';
$title = get_string('sociallink', 'theme_pencil');
$description = get_string('sociallinkdesc', 'theme_pencil');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$page->add($setting);

// Social icon setting 3.
$name = 'theme_pencil/socialicon3';
$title = get_string('sociallinkicon', 'theme_pencil');
$description = get_string('sociallinkicondesc', 'theme_pencil');
$default = 'home';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$page->add($setting);

// Must add the page after definiting all the settings!
$settings->add($page);
