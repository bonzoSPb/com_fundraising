<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class FundRaisingControllerFundRaisings extends JControllerAdmin{
    public function getModel($name = 'FundRaising', $prefix = 'FundRaisingModel'){
        return parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}