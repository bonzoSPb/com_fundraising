<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.modellist');
 
class FundRaisingModelFundRaisings extends JModelList{
    protected function getListQuery(){
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);
 
        $query->select('id, title,current_amount,final_amount,finished,link_article');
 
        $query->from('#__fundraising');
 
        return $query;
    }
}