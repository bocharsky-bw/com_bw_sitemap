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

defined('_JEXEC') or die();

/**
 * A centralized place for GUI-related helper functions
 */
class BwSitemapHelper
{
    
    public static function generateToolbar() {
        
        JFactory::getApplication()->input->set('hidemainmenu', false);
        JToolbarHelper::title(JText::_('Карта сайта'), 'link');
    }
    
    public static function generateSidebar() {
        
        JHtmlSidebar::addEntry(
                JText::_('Карта сайта'),
                'index.php?option=com_bw_sitemap',
                JFactory::getApplication()->input->get('view', '') == ''
        );
        JHtmlSidebar::addEntry(
                JText::_('Настройки'),
                'index.php?option=com_config&view=component&component=com_bw_sitemap',
                JFactory::getApplication()->input->get('view', '') == 'config'
        );
        
        return JHtmlSidebar::render();
    }
}