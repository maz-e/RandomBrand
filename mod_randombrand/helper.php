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
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */
    public static function getBrands($params)
    {
      // Obtain a database connection
      $db = JFactory::getDbo();
      // Retrieve the shout
      $query = $db->getQuery(true)
                  ->select($db->quoteName('id, brand_name, published, logo, webpage'))
                  ->from($db->quoteName('#__brand'))
                  ->where('published = true');
      // Prepare the query
      $db->setQuery($query);
      // Load the row.
      $result = $db->loadResult();
      // Return the Hello
      return $result;
    }
}
