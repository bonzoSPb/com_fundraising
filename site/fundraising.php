<?php
defined('_JEXEC') or die;

JLog::addLogger(
    array('text_file' => 'com_fundraising.php'),
    JLog::ALL,
    array('com_fundraising')
);
 
jimport('joomla.application.component.controller');
 
$controller = JControllerLegacy::getInstance('FundRaising');
 
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task', 'display'));
 
$controller->redirect();