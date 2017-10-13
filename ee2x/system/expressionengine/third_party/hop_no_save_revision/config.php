<?php if ( ! defined('EXT')) exit('No direct script access allowed');

/**
 * Hop No Save Revision
 *
 * NSM Addon Updater config file.
 *
 * @package		Hop Studios:Hop No Save Revision
 * @author		Hop Studios, Inc.
 * @copyright	Copyright (c) 2016, Hop Studios, Inc.
 * @link		http://www.hopstudios.com/software/
 * @version		1.1
 */

$config['name']='Hop No Save Revision';
$config['version']='1.1';
$config['nsm_addon_updater']['versions_xml']='http://www.hopstudios.com/software/';

// Version constant
if (!defined("HOP_NO_SAVE_REVISION_VERSION")) {
	define('HOP_NO_SAVE_REVISION_VERSION', $config['version']);
}
