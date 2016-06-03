<?php
defined('_JEXEC') or die;
jimport('joomla.database.table');

class FundRaisingTableFundRaising extends JTable{
    function __construct(&$db){
        parent::__construct('#__fundraising', 'id', $db);
    }
}