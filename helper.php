<?php

/**
 * @package    Unified Factory Widget
 *
 * @author     p.dabrowski@unifiedfactory.com
 * @copyright  Unified Factory
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://github.com/UnifiedFactory/AppJoomlaModule
 */

defined('_JEXEC') or die;

$db    = JFactory::getDbo();
$query = $db->getQuery(true)
	->select($db->quoteName('script'))
	->from($db->quoteName('#__ufWidget'))
	->where('lang = ' . $db->Quote('en-GB'));
$db->setQuery($query);
$result = $db->loadResult();
return $result;