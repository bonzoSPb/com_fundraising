<?php
defined('_JEXEC') or die;
?>
<tr>
	<th width="1%" class="hidden-phone">
	    <input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
	</th>
    <th width="1%">
        <?php echo JText::_('COM_FUNDRAISING_FUNDRAISING_HEADING_ID'); ?>
    </th>
    <th>
        <?php echo JText::_('COM_FUNDRAISING_FUNDRAISING_HEADING_TITLE'); ?>
    </th>
    <th>
        <?php echo JText::_('COM_FUNDRAISING_FUNDRAISING_HEADING_CURRENT_AMOUNT'); ?>
    </th>
    <th>
        <?php echo JText::_('COM_FUNDRAISING_FUNDRAISING_HEADING_FINAL_AMOUNT'); ?>
    </th>    
    <th>
        <?php echo JText::_('COM_FUNDRAISING_FUNDRAISING_HEADING_FINISHED'); ?>
    </th>    
    <th>
        <?php echo JText::_('COM_FUNDRAISING_FUNDRAISING_HEADING_LINK_ARTICLE'); ?>
    </th>    
</tr>