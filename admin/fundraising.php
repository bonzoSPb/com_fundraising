<?php
defined('_JEXEC') or die;
 
JError::$legacy = false;
$document = JFactory::getDocument();
$document->addStyleDeclaration('.icon-48-fundraising {background-image: url(../media/com_fundraising/images/hello-48x48.png);}');

jimport('joomla.application.component.controller');

$controller = JControllerLegacy::getInstance('FundRaising');
 
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task', 'display'));

$controller->redirect();