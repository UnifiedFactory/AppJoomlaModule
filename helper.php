<?php

defined('_JEXEC') or die;

$db    = JFactory::getDbo();
$query = $db->getQuery(true)
	->select($db->quoteName('script'))
	->from($db->quoteName('#__ufWidget'))
	->where('lang = ' . $db->Quote('en-GB'));
$db->setQuery($query);
$result = $db->loadResult();
return $result;