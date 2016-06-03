<?php
defined('_JEXEC') or die;

abstract class FundRaisingHelper
{
    public static function addSubmenu($submenu)
    {
        JSubMenuHelper::addEntry(
            JText::_('COM_FUNDRAISING_SUBMENU_MESSAGES'),
            'index.php?option=com_fundraising',
            $submenu == 'messages'
        );
 
        JSubMenuHelper::addEntry(
            JText::_('COM_FUNDRAISING_SUBMENU_CATEGORIES'),
            'index.php?option=com_categories&view=categories&extension=com_fundraising',
            $submenu == 'categories'
        );
 
        $document = JFactory::getDocument();
        $document->addStyleDeclaration('.icon-48-fundraising ' .
            '{background-image: url(../media/com_fundraising/images/hello-48x48.png);}');
 
        if ($submenu == 'categories')
        {
            $document->setTitle(JText::_('COM_FUNDRAISING_ADMINISTRATION_CATEGORIES'));
        }
    }
}