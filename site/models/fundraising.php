<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modelitem');
 
class FundRaisingModelFundRaising extends JModelItem{
    public function getTable($type = 'FundRaising', $prefix = 'FundRaisingTable', $config = array()){
        return JTable::getInstance($type, $prefix, $config);
    }
 
    public function getItem($id = null){
        $id = (!empty($id)) ? $id : (int) $this->getState('record.id');
        if ($this->_item === null){
            $this->_item = array();
        }
 
        if (!isset($this->_item[$id])){
            $table = $this->getTable();
            $table->load($id); 
            $this->_item[$id] = $table->title;
        }
 
        return $this->_item[$id];
    }
}