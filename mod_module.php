<?php
/**
 * @package    Unified Factory Widget
 *
 * @author     p.dabrowski@unifiedfactory.com
 * @copyright  Unified Factory
 * @license    GNU General Public License version 3; see LICENSE.txt
 * @link       https://github.com/UnifiedFactory/AppJoomlaModule
 */

defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_module', $params->get('layout', 'default'));
