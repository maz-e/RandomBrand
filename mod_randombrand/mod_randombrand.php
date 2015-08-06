<?php
/**
 * @package     Joomla.Bladis
 * @subpackage  mod_randombrand
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$images = modRandomBrandHelper::getBrands();

$random_img = modRandomBrandHelper::getRandomImage($params, $images);
require JModuleHelper::getLayoutPath('mod_randombrand');
