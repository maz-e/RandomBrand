<?php
/**
 * @package     Joomla.Bladis
 * @subpackage  mod_randombrand
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

class modRandomBrandHelper
{
   /**
   * Retrieves the list images
   *
   * @access public
   */
   public static function getBrands()
   {
   // Obtain a database connection
   $db = JFactory::getDbo();
   // Retrieve the shout
   $query = $db->getQuery(true)
               ->select($db->quoteName(array('id', 'brand_name', 'published', 'logo', 'webpage')))
               ->from($db->quoteName('#__brand'))
               ->where($db->quoteName('published') . '= 1 ');
   // Prepare the query
   $db->setQuery($query);
   // Load the results as a list of stdClass objects.
   $results = $db->loadObjectList();
   // Return the Hello
   return $results;
   }

   /**
	 * Retrieves a random image
	 *
	 * @param   \Joomla\Registry\Registry  &$params  module parameters object
	 * @param   array                      $images   list of images
	 *
	 * @return  mixed
	 */
	public static function getRandomImage(&$params, $images)
	{
      $random = array_rand($images, 12);
      foreach ($random as $key) {
         $img[] = $images[$key];
      }
      // Randomize the order of the elements in the array
      shuffle($img);
      // Return the random list logo images
      return $img;
   }
}
