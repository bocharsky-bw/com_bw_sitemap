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

defined('_JEXEC') or die;

class BwSitemapViewDefault extends JViewLegacy
{
    
    public $posts;
    
    /**
     * Display the view
     */
    public function display($tpl = null) {
        $db = JFactory::getDbo();
        
        // Get the parameters
        $params = JComponentHelper::getParams('com_bw_sitemap');

        $limit = $params->get('links_limit', 99);
        $this->posts = $db->setQuery("SELECT "
                    . "* "
                    . "FROM #__content "
                    . "WHERE 1=1 "
                    . "AND state = 1 "
                    . "ORDER BY created DESC "
                    . "LIMIT $limit ")
                ->loadAssocList();
        
        parent::display($tpl);
    }
    
}