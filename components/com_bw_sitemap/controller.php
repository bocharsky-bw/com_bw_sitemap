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

/**
 * Component Controller
 */
class BwSitemapController extends JControllerLegacy
{
    
    protected $default_view = 'default';


    /**
     * Method to display a view.
     *
     * @param   boolean			If true, the view output will be cached
     * @param   array  An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
     *
     * @return  JController		This object to support chaining.
     * @since   1.5
     */
    public function display($cachable = false, $urlparams = false)
    {
        parent::display($cachable, $urlparams);

        return $this;
    }

}
