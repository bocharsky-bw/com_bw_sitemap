<?php
/**
 * @package     Joomla BW
 * @subpackage  com_bw_sitemap
 *
 * @copyright   (C) 2013 BW - Bocharsky Victor. BrainForce Labs. All rights reserved.
 * @author      Bocharsky Victor <mail@brainforce.kiev.ua>
 * @link        http://brainforce.kiev.ua/ BrainForce Labs - Joomla CMS projects
 * @license     All right reserved by Bocharsky Victor
 */

// Protect from unauthorized access
defined('_JEXEC') or die();

$controller = JControllerLegacy::getInstance('BwSitemap');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();