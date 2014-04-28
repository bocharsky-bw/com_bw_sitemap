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
?>
<script>
    // Script for Joomla Core Tooltips
    jQuery(document).ready(function(){
        jQuery('.hasTooltip').tooltip({"html": true,"container": "body"});
    });
</script>
<?php if (!empty( $this->sidebar)) : ?>
    <div id="j-sidebar-container" class="span2">
        <h3>Меню</h3>
        <?php echo $this->sidebar; ?>
    </div>
<div id="j-main-container" class="span10">
<?php else : ?>
<div id="j-main-container">
<?php endif;?>
    <h1>Карта сайта</h1>
</div>