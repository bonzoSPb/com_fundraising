<?php

defined('_JEXEC') or die;

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
 

class JFormFieldFundRaising extends JFormFieldList{
    protected $type = 'FundRaising';
    protected function getOptions(){
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);
        $query->select('id, title, current_amount, final_amount, finished, link_article')
                ->from('#__fundraising');
        $db->setQuery($query);
        $records = $db->loadObjectList();
        $options = array();

        if ($records){
            foreach($records as $record) {
                $options[] = JHtml::_('select.option', $record->id, $record->title);
            }
        }

        $options = array_merge(parent::getOptions(), $options);
        return $options;
    }
}