<?php

$db    = JFactory::getDbo();
$query = $db->getQuery(true)
	->select($db->quoteName('license'))
	->from($db->quoteName('#__ufWidget'))
	->where('lang = ' . $db->Quote('en-GB'));
$db->setQuery($query);
$result = $db->loadResult();
return $result;