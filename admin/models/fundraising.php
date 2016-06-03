<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modeladmin');

class FundRaisingModelFundRaising extends JModelAdmin{

    public function getTable($type = 'FundRaising', $prefix = 'FundRaisingTable', $config = array()){
        return JTable::getInstance($type, $prefix, $config);
    }
 
    public function getForm($data = array(), $loadData = true){
        $form = $this->loadForm(
            $this->option . '.fundraising', 'fundraising', array('control' => 'jform', 'load_data' => $loadData)
        );
 
        if (empty($form)){
            return false;
        }
 
        return $form;
    }

    protected function loadFormData(){
        $data = JFactory::getApplication()->getUserState($this->option . '.edit.fundraising.data', array());
 
        if (empty($data)){
            $data = $this->getItem();
        }
 
        return $data;
    }
}