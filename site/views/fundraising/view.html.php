<?php

defined('_JEXEC') or die('Restricted access');
 

jimport('joomla.application.component.view');
 
class FundRaisingViewFundRaising extends JViewLegacy{
    protected $item;  
    public function display($tpl = null)
    {
        $this->item = $this->get('Item');  
        parent::display($tpl);
    }
}