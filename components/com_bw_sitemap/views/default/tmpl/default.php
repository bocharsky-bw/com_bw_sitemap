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

// include content route helper for building article links
require_once JPATH_COMPONENT .'/../com_content/helpers/route.php';
?>
<h1>Карта сайта</h1>
<ul>
    <?php foreach ($this->posts as $post) : ?>
        <li>
            <a href="<?php print JRoute::_(ContentHelperRoute::getArticleRoute($post['id'] .':'. $post['alias'], $post['catid'])) ?>">
                <?php print $this->escape($post['title']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>